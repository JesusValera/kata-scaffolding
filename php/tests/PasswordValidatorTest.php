<?php

declare(strict_types=1);

namespace KataTests;

use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

final class PasswordValidatorTest extends TestCase
{
    /** @test */
    public function is_true_when_true(): void
    {
        $result = (new PasswordValidator())->validate();

        self::assertSame(true, $result);
    }
}
