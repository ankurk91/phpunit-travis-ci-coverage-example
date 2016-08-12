<?php

namespace Ankur;

class Calculator
{


    /**
     * Add two numbers
     * @param $x
     * @param $y
     * @return mixed
     */
    public function addTwo($x, $y)
    {
        return $x + $y;
    }

    /**
     * Multiply two numbers
     * @param $x
     * @param $y
     * @return mixed
     *
     */
    public function multiplyTwo($x, $y)
    {
        return $x * $y;
    }

    /**
     * Subtract two numbers
     * @param $x
     * @param $y
     * @return mixed
     *
     */
    public function subtractTwo($x, $y)
    {
        return $x - $y;
    }

    /**
     * Divide two numbers
     * @param $x
     * @param $y
     * @return float
     */
    public function divideTwo($x, $y)
    {
        //TODO Handle divide by zero
        return $x / $y;
    }

}