<?php
/**
/**
 * @Software       : PhpStorm
 * @User           : hmx
 * @DateTime       : 2020/12/21 下午 05:16
 * @File           : Email.php
 * @Contact        : ifanaticfire@gmail.com
 * @Project        : php8-demo
 * @Description    : 测试phpunit第一步(环境：phpunit9，php7.3)，运行命令: ./vendor/bin/phpunit app/tests/EmailTest.php
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Models\Email;
/**
 * @covers Email
 */
final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}

