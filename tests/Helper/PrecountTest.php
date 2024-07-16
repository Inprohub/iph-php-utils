<?php


namespace Helper;

use Carbon\Carbon;
use Exception;
use Inprohub\Utils\Helper\Precount;
use Inprohub\Utils\Helper\SplitTimeRange\SplitTimeRange;
use PHPUnit\Framework\TestCase;

class PrecountTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testDateTime(): void
    {
        $tz = 'Asia/Taipei';
        $start = Carbon::parse('2022-02-01 00:00:00')->getTimestampMs();
        $end = Carbon::parse('2022-01-01 00:00:01')->getTimestampMs();
        $this->expectExceptionMessage(sprintf('開始時間不能大於結束時間: %d, %d', $start, $end));
        Precount::split($tz, $start, $end);
    }

    /**
     * @throws Exception
     */
    public function testTimestampCheck(): void
    {
        $tz = 'Asia/Taipei';
        $this->expectExceptionMessage('時間格式錯誤: 174000000000, 174000000000');
        Precount::split($tz, 174000000000, 174000000000);
    }

    /**
     * @throws Exception
     */
    public function testSplitTime(): void
    {
        $tz = 'Asia/Taipei';
        $start = Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 17:40', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertInstanceOf(SplitTimeRange::class, $result);

        $this->assertObjectHasProperty('prevRange', $result);
        $this->assertObjectHasProperty('nextRange', $result);
        $this->assertObjectHasProperty('precount', $result);

        $this->assertNull($result->precount);
        $this->assertNull($result->prevRange);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 17:40', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 18:10', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertNull($result->prevRange);
        $this->assertNull($result->precount);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:10', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-20 17:29', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 18:00', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertNull($result->precount);
        $this->assertNull($result->prevRange);
        $this->assertSame(Carbon::parse('2024-03-20 17:29', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:00', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 18:08', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertNull($result->prevRange);
        $this->assertNull($result->precount);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:08', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 18:09', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:09', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 19:09', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->prevRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->prevRange->end);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->precount->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:30', $tz)->getTimestampMs(), $result->precount->end);
        $this->assertSame(Carbon::parse('2024-03-20 18:30', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 19:09', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 19:10', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->prevRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->prevRange->end);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->precount->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:30', $tz)->getTimestampMs(), $result->precount->end);
        $this->assertSame(Carbon::parse('2024-03-20 18:30', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 19:10', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-25 00:00', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-25 23:59:59.999', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertSame(Carbon::parse('2024-03-25 00:00', $tz)->getTimestampMs(), $result->precount->start);
        $this->assertSame(Carbon::parse('2024-03-25 23:30', $tz)->getTimestampMs(), $result->precount->end);
        $this->assertSame(Carbon::parse('2024-03-25 23:30', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-25 23:59:59.999', $tz)->getTimestampMs(), $result->nextRange->end);
        $this->assertNull($result->prevRange);

        $start = Carbon::parse('2024-03-25 00:00', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-25 17:18:59.999', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertNull($result->prevRange);
        $this->assertSame(Carbon::parse("2024-03-25 00:00", $tz)->getTimestampMs(), $result->precount->start);
        $this->assertSame(Carbon::parse("2024-03-25 16:30", $tz)->getTimestampMs(), $result->precount->end);
        $this->assertSame(Carbon::parse("2024-03-25 16:30", $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse("2024-03-25 17:18:59.999", $tz)->getTimestampMs(), $result->nextRange->end);

        Carbon::setTestNow(Carbon::parse('2024-03-25 17:00', $tz));
        $start = Carbon::parse('2024-03-25 00:00', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-25 17:00', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertNull($result->prevRange);
        $this->assertSame(Carbon::parse('2024-03-25 00:00', $tz)->getTimestampMs(), $result->precount->start);
        $this->assertSame(Carbon::parse('2024-03-25 16:30', $tz)->getTimestampMs(), $result->precount->end);
        $this->assertSame(Carbon::parse('2024-03-25 16:30', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-25 17:00', $tz)->getTimestampMs(), $result->nextRange->end);
    }
}