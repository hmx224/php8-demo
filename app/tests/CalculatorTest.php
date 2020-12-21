<?php

/**
 * @Software       : PhpStorm
 * @User           : hmx
 * @DateTime       : 2020/12/21 下午 05:06
 * @File           : CalculatorTest.php
 * @Contact        : ifanaticfire@gmail.com
 * @Project        : php8-demo
 * @Description    : 运行命令: ./vendor/bin/phpunit app/tests/CalculatorTest.php
 */
namespace App\tests;

use App\Models\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * Generated from @assert (0, 0) == 0.
     */
    public function testSum()
    {
        $obj = new Calculator;
        $this->assertEquals(0, $obj->sum(0, 0));

    }
}