<?php

namespace Tests;

use Projects\Ankur as App;


class CalculatorTest extends \PHPUnit_Framework_TestCase
{


    private function getInstance()
    {
        return new App\Calculator();
    }

    public function testAdd()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $obj = $this->getInstance();
        $value = $obj->addTwo(2, 3);
        $this->assertEquals($value, 5);
    }

    public function testMultiply()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $obj = $this->getInstance();
        $value = $obj->multiplyTwo(2, 3);
        $this->assertEquals($value, 6);
    }

    public function testSubtract()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $obj = $this->getInstance();
        $value = $obj->subtractTwo(4, 2);
        $this->assertEquals($value, 2);
    }

}