<?php

namespace App\Libraries;

/**
 * 共通メソッドクラス
 */
class StringFunctions
{
    /**
     * 配列を文字列に変換する
     *
     * @param string $separator
     * @param array $data
     * @return string
     */
    public static function convertArray(array $data, string $separator = ","): string
    {
        return implode($separator, $data);
    }

    /**
     * 3桁区切りカンマの文字列のカンマを除去する。
     *
     * @param string $kugiri_number
     * @return string
     */
    public static function convertCanmaDelete(string $kugiri_number): string
    {
        return str_replace(',', '', $kugiri_number);
    }
}
