<?php

namespace App\Tests;

use App\Service\PromotionCalculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSomething(): void
    {
        $calculator = new PromotionCalculator();

        $result = $calculator->add(5, 5);

        $this->assertEquals($result, 11);
    }
}
