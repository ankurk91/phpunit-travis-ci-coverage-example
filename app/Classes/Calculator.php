<?php

namespace Projects\Ankur;

/**
 * Class Calculator.
 */
class Calculator
{
    public function __construct()
    {
        // do something
    }

    /**
     * Add two numbers.
     *
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function addTwo($x, $y)
    {
        return $x + $y;
    }

    /**
     * Multiply two numbers.
     *
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function multiplyTwo($x, $y)
    {
        return $x * $y;
    }

    /**
     * Subtract two numbers.
     *
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function subtractTwo($x, $y)
    {
        return $x - $y;
    }

    /**
     * Divide two numbers.
     *
     * @param $x
     * @param $y
     *
     * @return float
     */
    public function divideTwo($x, $y)
    {
        if($y === 0) {
            throw new \InvalidArgumentException("The divisor cannot be zero!");
        }
        return $x / $y;
    }
}
