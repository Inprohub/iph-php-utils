<?php

namespace Inprohub\Utils\Helper;

use Carbon\Carbon;
use Exception;
use Inprohub\Utils\Helper\SplitTimeRange\NextRange;
use Inprohub\Utils\Helper\SplitTimeRange\Precount as PrecountAlias;
use Inprohub\Utils\Helper\SplitTimeRange\PrevRange;
use Inprohub\Utils\Helper\SplitTimeRange\SplitTimeRange;

class Precount
{
    /**
     * precount 預留的 buffer 秒數
     *
     * 避免還沒算計算 就去拿 precount 的資料
     * @var int
     */
    protected static int $bufferSeconds = 20 * 60;

    /**
     * 多少分鐘算一個 precount
     * @var int
     */
    private static int $precountMinuteUnits = 30;

    /**
     * 分割使用 precount 時間
     *
     * 回傳為左閉右開時間段 [start, end)
     *
     * @param string $tz
     * @param int $startTimestamp
     * @param int $endTimestamp
     * @return SplitTimeRange
     * @throws Exception
     */
    public static function split(string $tz, int $startTimestamp, int $endTimestamp): SplitTimeRange
    {
        // 檢查是否為Timestamp13位數
        if (!Tool::timestampCheck($startTimestamp) || !Tool::timestampCheck($endTimestamp)) {
            throw new Exception(sprintf('時間格式錯誤: %d, %d', $startTimestamp, $endTimestamp));
        }

        // 時間錯誤
        if ($endTimestamp < $startTimestamp) {
            throw new Exception(sprintf('開始時間不能大於結束時間: %d, %d', $startTimestamp, $endTimestamp));
        }

        $nowTimestamp = Carbon::now($tz)->getTimestampMs();
        if ($endTimestamp > $nowTimestamp) {
            $endTimestamp = $nowTimestamp;
        }

        $splitTimeRange = new SplitTimeRange();
        $interval = Carbon::createFromTimestampMs($startTimestamp, $tz)
            ->diffInSeconds(Carbon::createFromTimestampMs($endTimestamp, $tz)->addMilliseconds());

        // 小於30分鐘 直接使用 raw data
        if ($interval < self::$precountMinuteUnits * 60 + self::$bufferSeconds) {
            $splitTimeRange->nextRange = new NextRange();
            $splitTimeRange->nextRange->start = $startTimestamp;
            $splitTimeRange->nextRange->end = $endTimestamp;
            return $splitTimeRange;
        }

        // mod 30 minute = 0
        $startTime = Carbon::createFromTimestampMs($startTimestamp, $tz);
        $endTimeTmp = Carbon::createFromTimestampMs($endTimestamp, $tz);
        $startTimeMinute = $startTime->minute;
        if ($interval / 60 % (self::$precountMinuteUnits + self::$bufferSeconds) === 0) {
            // 如果剛好壓在 precount 上 就直接使用
            if (
                $endTimeTmp->addSeconds(self::$bufferSeconds)->lessThanOrEqualTo(Carbon::now($tz))
                && $startTime->second === 0
                && $startTime->milli === 0
                && ($startTimeMinute === 0 || $startTimeMinute === 30)
            ) {
                $splitTimeRange->precount = new PrecountAlias();
                $splitTimeRange->precount->start = $startTimestamp;
                $splitTimeRange->precount->end = $endTimestamp;
                return $splitTimeRange;
            }
        }

        // 30分鐘以上
        $starTimeDiffMinute = (self::$precountMinuteUnits - $startTimeMinute % self::$precountMinuteUnits) % self::$precountMinuteUnits;
        if ($starTimeDiffMinute !== 0 || $startTime->second !== 0 || $startTime->milli !== 0) {
            $splitTimeRange->prevRange = new PrevRange();
            $splitTimeRange->prevRange->start = $startTimestamp;
            $splitTimeRange->prevRange->end = Carbon::createFromTimestampMs($startTimestamp, $tz)
                ->startOfMinute()
                ->addMinutes($starTimeDiffMinute)
                ->getTimestampMs();
        }

        $endTime = Carbon::createFromTimestampMs($endTimestamp, $tz);
        $endTimeMinute = $endTime->minute;
        $endTimeDiffMinute = $endTimeMinute % self::$precountMinuteUnits;
        $splitTimeRange->nextRange = new NextRange();
        $splitTimeRange->nextRange->start = Carbon::createFromTimestampMs($endTimestamp, $tz)
            ->startOfMinute()
            ->subminutes($endTimeDiffMinute)
            ->getTimestampMs();
        $splitTimeRange->nextRange->end = $endTimestamp;

        $splitTimeRange->precount = new PrecountAlias();
        $splitTimeRange->precount->start = Carbon::createFromTimestampMs($startTimestamp, $tz)
            ->startOfMinute()
            ->addMinutes($starTimeDiffMinute)
            ->getTimestampMs();
        $splitTimeRange->precount->end = Carbon::createFromTimestampMs($endTimestamp, $tz)
            ->startOfMinute()
            ->subminutes($endTimeDiffMinute)
            ->getTimestampMs();

        if ($splitTimeRange->precount->end > $splitTimeRange->nextRange->end - self::$bufferSeconds * 1000) {
            if ($splitTimeRange->precount->end - self::$precountMinuteUnits * 60 * 1000 === $splitTimeRange->precount->start) {
                $splitTimeRange->prevRange->end = $splitTimeRange->precount->end;
                $splitTimeRange->precount = null;
            } else {
                $splitTimeRange->precount->end -= self::$precountMinuteUnits * 60 * 1000;
                $splitTimeRange->nextRange->start = $splitTimeRange->precount->end;
            }
        }

        if (isset($splitTimeRange->prevRange) && isset($splitTimeRange->nextRange) && $splitTimeRange->prevRange->end
            === $splitTimeRange->nextRange->start) {
            $splitTimeRange->nextRange->start = $splitTimeRange->prevRange->start;
            $splitTimeRange->prevRange = null;
            $splitTimeRange->precount = null;
        }
        //
        // if (isset($splitTimeRange->precount) && $splitTimeRange->precount->end < $splitTimeRange->precount->start) {
        //     $splitTimeRange->precount = null;
        // }

        return $splitTimeRange;
    }

    public static function getBufferSeconds(): int
    {
        return self::$bufferSeconds;
    }

    public static function setBufferSeconds(int $bufferSeconds): void
    {
        self::$bufferSeconds = $bufferSeconds;
    }
}