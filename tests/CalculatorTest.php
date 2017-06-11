<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Projects\Ankur as App;

/**
 * Class CalculatorTest.
 */
class CalculatorTest extends TestCase
{
    /**
     * Calculator class instance
     *
     * @var App\Calculator
     */
    private $calc;

    public function __construct()
    {
        $this->calc = new App\Calculator();
        parent::__construct();
    }

    public function testAdd()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $value = $this->calc->addTwo(2, 3);
        $this->assertEquals($value, 5);
    }

    public function testMultiply()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $value = $this->calc->multiplyTwo(2, 3);
        $this->assertEquals($value, 6);
    }

    public function testSubtract()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $value = $this->calc->subtractTwo(4, 2);
        $this->assertEquals($value, 2);
    }

    // Left divide function intentionally
}
