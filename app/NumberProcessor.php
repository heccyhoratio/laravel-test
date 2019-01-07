<?php

namespace App;
/**
 * Class NumberProcessor
 * Creates array missing a number and then finds it again
 * Appsumer Practicle Test
 * @package App
 */
class NumberProcessor
{
    protected $numberArray;
    protected $number;

    /**
     * NumberProcessor constructor.
     * Sets up the class variables
     * @param $number
     */
    public function __construct($number)
    {
        $this->numberArray = [];
        $this->number = intval($number);
    }

    /**
     * Loops through the array till it finds one missing
     * @return int
     */
    public function getNumberOutOfArray()
    {
        for ($i = 1; $i <= 101; $i++) {
            if (($this->numberArray[$i] - 1) !== $i) {
                return $i + 1;
            }
        }
    }

    /**
     * Creates an array from 0-100 with $this->number missing
     */
    public function createArrayWithoutInputNum()
    {
        for ($i = 1; $i <= 101; $i++) {
            if ($this->number !== $i) {
                $this->numberArray[] = $i;
            }
        }
    }
}