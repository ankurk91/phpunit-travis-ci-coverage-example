<?php

namespace Tests;

namespace Ankur;


class CalculatorTest extends \PHPUnit_Framework_TestCase
{


    private function getInstance()
    {
        return new Calculator();
    }

    public function testAdd()
    {
        $obj = $this->getInstance();
        $value = $obj->addTwo(2, 3);
        $this->assertEquals($value, 5);
    }

    public function testMultiply()
    {
        $obj = $this->getInstance();
        $value = $obj->multiplyTwo(2, 3);
        $this->assertEquals($value, 6);
    }

    public function testSubtract()
    {
        $obj = $this->getInstance();
        $value = $obj->subtractTwo(4, 2);
        $this->assertEquals($value, 2);
    }

}