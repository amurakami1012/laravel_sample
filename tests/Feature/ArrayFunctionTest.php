<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Libraries\ArrayFunctions;

/**
 * 実行コマンド：./vendor/bin/phpunit tests/Feature/ArrayFunctionTest.php
 */
class ArrayFunctionTest extends TestCase
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function test_arrayMerge()
    {
        $array1 = ['code' => '001', 'name' => 'mack'];

        $array2 = ['tel' => '080-1234-1234', 'posts' => '123-1234', 'address' => 'tokyo'];

        $result = ArrayFunctions::arrayMerge($array1, $array2);

        echo "\n";
        echo count($result);

        $this->assertEquals(1, 1);
    }

    // public function test_getSystemTime()
    // {
    //     $result = CarbonFunctions::getSystemTime('H:i:s');

    //     echo "\n";
    //     echo $result;

    //     $this->assertEquals(1, 1);
    // }

}
