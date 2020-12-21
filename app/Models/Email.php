<?php

/**
 * @Software       : PhpStorm
 * @User           : hmx
 * @DateTime       : 2020/12/21 下午 05:16
 * @File           : Email.php
 * @Contact        : ifanaticfire@gmail.com
 * @Project        : php8-demo
 * @Description    : 解释说明文字
 */
declare(strict_types = 1);

namespace App\Models;

final class Email
{
    private $email;

    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}