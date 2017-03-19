<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Projects\Ankur as App;

/**
 * Class CalculatorTest.
 */
class CalculatorTest extends TestCase
{
    private function getInstance()
    {
        return new App\Calculator();
    }

    public function testAdd()
    {
        fwrite(STDOUT, __METHOD__."\n");
        $obj = $this->getInstance();
        $value = $obj->addTwo(2, 3);
        $this->assertEquals($value, 5);
    }

    public function testMultiply()
    {
        fwrite(STDOUT, __METHOD__."\n");
        $obj = $this->getInstance();
        $value = $obj->multiplyTwo(2, 3);
        $this->assertEquals($value, 6);
    }

    public function testSubtract()
    {
        fwrite(STDOUT, __METHOD__."\n");
        $obj = $this->getInstance();
        $value = $obj->subtractTwo(4, 2);
        $this->assertEquals($value, 2);
    }
}
