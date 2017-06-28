<?php

namespace Linio\Math;

/**
 * Interface Countable
 * @package Linio\Math
 */
interface Countable
{
    /**
     * @param Length $length
     * @return Number
     */
    public function count(Length $length) :  Number;
}
