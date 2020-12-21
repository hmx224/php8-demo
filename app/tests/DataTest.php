<?php
/**
 * @Software       : PhpStorm
 * @User           : hmx
 * @DateTime       : 2020/12/21 下午 06:01
 * @File           : DataTest.php
 * @Contact        : ifanaticfire@gmail.com
 * @Project        : php8-demo
 * @Description    : 使用返回数组的数组的数据供给器
 */


declare(strict_types = 1);
use PHPUnit\Framework\TestCase;

final class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }
}