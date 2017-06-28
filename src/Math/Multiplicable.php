<?php

namespace Linio\Math;

/**
 * Interface Multiplicable
 * @package Linio\Math
 */
interface Multiplicable
{
    /**
     * @param $divisor
     * @param $dividend
     * @return int
     */
    public function isMultiple($divisor, $dividend) : int;
}
