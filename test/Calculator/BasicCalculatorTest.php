<?php

namespace CalculatorTest;

use Calculator\BasicCalculator;
use PHPUnit\Framework\TestCase;

final class BasicCalculatorTest extends TestCase
{
    /** @test */
    public function shouldSumTwoIntegers()
    {
        $basic_calculator = new BasicCalculator();
        $result = $basic_calculator->sum(1, 1);

        $this->assertEquals($expected = 2, $actual = $result, 'Should sum two integers');
    }
}
