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
    protected static int $bufferSeconds = 45 * 60;

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

        // 小於 30 分鐘
        if ($interval / 60 < self::$precountMinuteUnits) {
            $splitTimeRange->nextRange = new NextRange();
            $splitTimeRange->nextRange->start = $startTimestamp;
            $splitTimeRange->nextRange->end = $endTimestamp;
            return $splitTimeRange;
        }

        $tmp = $nowTimestamp - self::$bufferSeconds * 1000;
        $lastPrecountEnd = $tmp - $tmp % (self::$precountMinuteUnits * 60 * 1000);

        // 等於 30 分鐘
        if (
            $interval / 60 % self::$precountMinuteUnits === 0 &&
            Carbon::createFromTimestampMs($startTimestamp)->minute % self::$precountMinuteUnits === 0 &&
            $lastPrecountEnd > $startTimestamp
        ) {
            $splitTimeRange->precount = new PrecountAlias();
            $splitTimeRange->precount->start = $startTimestamp;

            if ($endTimestamp < $lastPrecountEnd) {
                $splitTimeRange->precount->end = $endTimestamp;
            } else {
                $splitTimeRange->precount->end = $lastPrecountEnd;

                $splitTimeRange->nextRange = new NextRange();
                $splitTimeRange->nextRange->start = $lastPrecountEnd;
                $splitTimeRange->nextRange->end = $endTimestamp;
            }

            return $splitTimeRange;
        }

        $precountStart = Carbon::createFromTimestampMs($startTimestamp)->ceilMinutes(self::$precountMinuteUnits)->getTimestampMs();
        $precountEnd = Carbon::createFromTimestampMs($endTimestamp)->floorMinutes(self::$precountMinuteUnits)->getTimestampMs();
        if ($precountEnd > $lastPrecountEnd) {
            $precountEnd = $lastPrecountEnd;
        }

        if ($precountEnd > $precountStart) {
            $splitTimeRange->precount = new PrecountAlias();
            $splitTimeRange->precount->start = $precountStart;
            $splitTimeRange->precount->end = $precountEnd;

            $splitTimeRange->prevRange = new PrevRange();
            $splitTimeRange->prevRange->start = $startTimestamp;
            $splitTimeRange->prevRange->end = $precountStart;

            $splitTimeRange->nextRange = new NextRange();
            $splitTimeRange->nextRange->start = $precountEnd;
            $splitTimeRange->nextRange->end = $endTimestamp;

            if ($splitTimeRange->prevRange->end === $splitTimeRange->prevRange->start) {
                $splitTimeRange->prevRange = null;
            }

            if ($splitTimeRange->nextRange->end === $splitTimeRange->nextRange->start) {
                $splitTimeRange->nextRange = null;
            }
        } else {
            $splitTimeRange->nextRange = new NextRange();
            $splitTimeRange->nextRange->start = $startTimestamp;
            $splitTimeRange->nextRange->end = $endTimestamp;
        }

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