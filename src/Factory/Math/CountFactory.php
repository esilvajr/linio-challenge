<?php

namespace Linio\Factory\Math;

use Linio\Math\Count;
use Linio\Math\Length;
use Linio\Math\Number;

/**
 * Class CountFactory
 * @package Linio\Factory\Math
 */
class CountFactory
{
    /**
     * @param Length $length
     * @return Number
     */
    public static function build(Length $length) : Number
    {
        $count = new Count();
        return $count->count($length);
    }
}
