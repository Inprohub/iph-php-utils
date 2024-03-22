<?php

namespace Inprohub\Utils\Helper;

class Tool
{
    /**
     * 檢查是否為Timestamp13位數
     * @param int $timestamp
     * @return bool
     */
    public static function timestampCheck(int $timestamp): bool
    {
        $pattern = '/^\d{13}$/';
        return preg_match($pattern, $timestamp);
    }
}