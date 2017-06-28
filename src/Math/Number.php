<?php

namespace Linio\Math;

/**
 * Class Number
 * @package Linio\Math
 */
class Number
{
    /**
     * @var array
     */
    private $numbers = array();

    /**
     * @return array
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }

    /**
     * @param array $numbers
     * @return Number
     */
    public function setNumbers(array $numbers): Number
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this;
    }

    /**
     * @param $int
     * @return Number
     */
    public function setNumber($int) : Number
    {
        $this->numbers[] = $int;
        return $this;
    }
}
