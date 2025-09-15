<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Libraries\StringFunctions;

/**
 * 実行コマンド：./vendor/bin/phpunit tests/Feature/StringFunctionTest.php
 */
class StringFunctionTest extends TestCase
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function test_convertArray()
    {
        $data = ['a', 'b', 'c'];

        $result = StringFunctions::convertArray($data);

        echo "\n";
        echo $result;

        $this->assertEquals(1, 1);
    }

}
