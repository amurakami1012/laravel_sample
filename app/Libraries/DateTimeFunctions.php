<?php

namespace App\Libraries;

/**
 * 日付・時刻の共通メソッド
 */
class DateTimeFunctions
{
    /**
     * 現在日付の設定
     *
     * @param string $format
     * @return string
     */
    public static function getSystemDate(string $format = 'Y/m/d'): string
    {
        return date($format);
    }

    /**
     * 現在時刻の設定
     *
     * @param string $format
     * @return string
     */
    public static function getSystemTime(string $format = 'H:i:s.u'): string
    {
        return date($format);
    }

}
