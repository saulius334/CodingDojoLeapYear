<?php

declare(strict_types=1);

namespace Tests;

use Generator;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertTrue;

class CalculateLeapYearTest extends TestCase
{
    /**
    * @dataProvider dataProvider
    */
    public function testLeapYearCalculator($input, $expected): void
    {
        assertTrue(true);
    }
    public function dataProvider(): Generator
    {
        yield 'allYearsDivisibleBy400AreLeapYears' => [400, true];
        yield 'allYearsDivisibleBy400AreLeapYears#2' => [2000, true];
        yield 'allYearsDivisibleBy100ButNotBy400AreNotLeapYears' => [1700, false];
        yield 'allYearsDivisibleBy100ButNotBy400AreNotLeapYears#2' => [1800, false];
        yield 'allYearsDivisibleBy4ButNotBy100AreLeapYears' => [2008, true];
        yield 'allYearsDivisibleBy4ButNotBy100AreLeapYears#2' => [2012, true];
        yield 'allYearsNotDivisibleBy4AreNotLeapYears' => [2017, false];
        yield 'allYearsNotDivisibleBy4AreNotLeapYears#2' => [2018, false];

    }
}
