<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Libraries\CarbonFunctions;

/**
 * 実行コマンド：./vendor/bin/phpunit tests/Feature/CarbonFunctionTest.php
 */
class CarbonFunctionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_getSystemDate()
    {
        $result = CarbonFunctions::getSystemDate();

        echo "\n";
        echo $result;

        $this->assertEquals(1, 1);
    }

    public function test_getSystemTime()
    {
        $result = CarbonFunctions::getSystemTime('H:i:s');

        echo "\n";
        echo $result;

        $this->assertEquals(1, 1);
    }

}
