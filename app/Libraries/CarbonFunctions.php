<?php

namespace App\Libraries;

use Carbon\Carbon;
use DateTime;

/**
 * 日付・時刻の共通メソッド
 */
class CarbonFunctions
{
    /**
     * 現在日付の設定
     *
     * @return string
     */
    public static function getSystemDate(): DateTime
    {
        return Carbon::now();
    }

    /**
     * 現在時刻の設定
     *
     * @param string $format
     * @return string
     */
    public static function getSystemTime(string $format = 'Y/m/d H:i:s.u'): string
    {
        return Carbon::now()->format($format);
    }

    /**
     * システム日付を取得する
     * ※postgresの仕様に合わせて、マイクロ秒は四捨五入
     *
     * @return string
     */
    public static function getSystemFloatDateTime(): string
    {
        return Carbon::now()->addSeconds(round((float) Carbon::now()->format('0.u')))->format('Y/m/d H:i:s');
    }

}
