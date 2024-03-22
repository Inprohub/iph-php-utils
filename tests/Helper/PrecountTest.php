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
        $this->expectExceptionMessage('開始時間不能大於結束時間');
        $tz = 'Asia/Taipei';
        $start = Carbon::parse('2022-02-01 00:00:00')->getTimestampMs();
        $end = Carbon::parse('2022-01-01 00:00:01')->getTimestampMs();
        Precount::split($tz, $start, $end);

    }

    /**
     * @throws Exception
     */
    public function testTimestampCheck(): void
    {
        $tz = 'Asia/Taipei';
        $this->expectExceptionMessage('時間格式錯誤');
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

        $this->isNull($result->precount);
        $this->isNull($result->prevRange);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 17:40', $tz)->getTimestampMs(), $result->nextRange->end);


        $start = Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 18:10', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertSame(Carbon::parse('2024-03-20 17:10', $tz)->getTimestampMs(), $result->prevRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->prevRange->end);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->precount->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:00', $tz)->getTimestampMs(), $result->precount->end);
        $this->assertSame(Carbon::parse('2024-03-20 18:00', $tz)->getTimestampMs(), $result->nextRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:10', $tz)->getTimestampMs(), $result->nextRange->end);

        $start = Carbon::parse('2024-03-20 17:29', $tz)->getTimestampMs();
        $end = Carbon::parse('2024-03-20 18:00', $tz)->getTimestampMs();
        $result = Precount::split($tz, $start, $end);
        $this->assertSame(Carbon::parse('2024-03-20 17:29', $tz)->getTimestampMs(), $result->prevRange->start);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->prevRange->end);
        $this->assertSame(Carbon::parse('2024-03-20 17:30', $tz)->getTimestampMs(), $result->precount->start);
        $this->assertSame(Carbon::parse('2024-03-20 18:00', $tz)->getTimestampMs(), $result->precount->end);
        $this->isNull($result->nextRange);
    }
}