<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once __DIR__."/../vendor/autoload.php";
use Ccard\Nivell1\Calculator;

class CalculatorTest extends TestCase {

    public function testAdd() : void {
        $calculator = new Calculator;
        $result = $calculator->add(5,4);

        $this->assertSame(9, $result);
    }

    public function testSubstract() : void {
        $calculator=new Calculator;
        $result=$calculator->substract(20,25);

        $this->assertSame(-5, $result);
    }
}