<?php

namespace App\Libraries;

/**
 * Arrayの共通メソッド
 */
class ArrayFunctions
{
    /**
     * 複数配列をマージする
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public static function arrayMerge(array $array1, array $array2): array
    {
        return array_merge($array1, $array2);
    }

    /**
     * 複数配列をマージする
     *
     * @param array $array1
     * @param array $array2
     * @return array
     * 
     * @copyright https://www.tam-tam.co.jp/tipsnote/program/post4067.html
     */
    public static function arraMergeRecursive(array $array1, array $array2): array
    {
        return array_merge_recursive($array1, $array2);
    }

    /**
     * 複数配列をマージする
     *
     * @param array $array1
     * @param array $array2
     * @return array
     * 
     * @copyright *****
     */
    public static function arraMergeRecursiveDistinct(array $array1, array $array2): array
    {
        return array_merge_recursive_distinct($array1, $array2);
    }

}
