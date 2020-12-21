<?php
/**
 * @Software       : PhpStorm
 * @User           : hmx
 * @DateTime       : 2020/12/21 下午 05:06
 * @File           : Calculator.php
 * @Contact        : ifanaticfire@gmail.com
 * @Project        : php8-demo
 * @Description    : 解释说明文字
 */

namespace App\Models;


class Calculator
{
    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     */
    public function sum($a, $b)
    {
        return $a + $b;
    }
}