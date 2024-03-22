<?php

namespace Inprohub\Utils\Helper;

use Carbon\Carbon;
use Exception;
use Inprohub\Utils\Helper\SplitTimeRange\NextRange;
use Inprohub\Utils\Helper\SplitTimeRange\Precount as PrecountAlias;
use Inprohub\Utils\Helper\SplitTimeRange\PrevRange as PrevRangeAlias;
use Inprohub\Utils\Helper\SplitTimeRange\SplitTimeRange;

class Precount
{
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
            throw new Exception('時間格式錯誤');
        }

        // 時間錯誤
        if ($endTimestamp < $startTimestamp) {
            throw new Exception('開始時間不能大於結束時間');
        }

        $splitTimeRange = new SplitTimeRange();
        $interval = Carbon::createFromTimestampMs($startTimestamp, $tz)
            ->diffInMinutes(Carbon::createFromTimestampMs($endTimestamp, $tz)->addMilliseconds());

        // 小於30分鐘 直接使用 raw data
        if ($interval < 30) {
            $splitTimeRange->nextRange = new NextRange();
            $splitTimeRange->nextRange->start = $startTimestamp;
            $splitTimeRange->nextRange->end = $endTimestamp;
            return $splitTimeRange;
        }

        // 剛好30分鐘
        $startTime = Carbon::createFromTimestampMs($startTimestamp, $tz);
        $startTimeMinute = $startTime->minute;
        if ($interval === 30) {
            // 如果剛好壓在 precount 上 就直接使用
            if ($startTime->second === 0 && $startTime->micro === 0 && ($startTimeMinute === 0 || $startTimeMinute === 30)) {
                $splitTimeRange->precount = new PrecountAlias();
                $splitTimeRange->precount->start = $startTimestamp;
                $splitTimeRange->precount->end = $endTimestamp;
                return $splitTimeRange;
            }
            $splitTimeRange->nextRange = new NextRange();
            $splitTimeRange->nextRange->start = $startTimestamp;
            $splitTimeRange->nextRange->end = $endTimestamp;
            return $splitTimeRange;
        }

        // 30分鐘以上
        $starTimeDiffMinute = (30 - $startTimeMinute % 30) % 30;
        if ($starTimeDiffMinute !== 0 || $startTime->second !== 0 || $startTime->micro !== 0) {
            $splitTimeRange->prevRange = new PrevRangeAlias();
            $splitTimeRange->prevRange->start = $startTimestamp;
            $splitTimeRange->prevRange->end = Carbon::createFromTimestampMs($startTimestamp, $tz)
                ->startOfMinute()
                ->addMinutes($starTimeDiffMinute)
                ->getTimestampMs();
        }

        $endTime = Carbon::createFromTimestampMs($endTimestamp, $tz);
        $endTimeMinute = $endTime->minute;
        $endTimeDiffMinute = $endTimeMinute % 30;
        if ($endTimeDiffMinute !== 0 || $endTime->second !== 0 || $endTime->millisecond !== 0) {
            $splitTimeRange->nextRange = new NextRange();
            $splitTimeRange->nextRange->start = Carbon::createFromTimestampMs($endTimestamp, $tz)
                ->startOfMinute()
                ->subminutes($endTimeDiffMinute)
                ->getTimestampMs();
            $splitTimeRange->nextRange->end = $endTimestamp;
        }

        if (isset($splitTimeRange->prevRange) && isset($splitTimeRange->nextRange) && $splitTimeRange->prevRange->end
            === $splitTimeRange->nextRange->start) {
            $splitTimeRange->nextRange->start = $splitTimeRange->prevRange->start;
            $splitTimeRange->prevRange = null;
            return $splitTimeRange;
        }

        $splitTimeRange->precount = new PrecountAlias();
        $splitTimeRange->precount->start = Carbon::createFromTimestampMs($startTimestamp, $tz)
            ->startOfMinute()
            ->addMinutes($starTimeDiffMinute)
            ->getTimestampMs();
        $splitTimeRange->precount->end = Carbon::createFromTimestampMs($endTimestamp, $tz)
            ->startOfMinute()
            ->subminutes($endTimeDiffMinute)
            ->getTimestampMs();

        return $splitTimeRange;
    }
}