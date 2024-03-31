<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    /** @test */
    public function is_true_when_true(): void
    {
        $result = (new Example())->method();

        self::assertSame(true, $result);
    }
}
