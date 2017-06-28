<?php

namespace Linio\Factory\Math;

use Linio\Math\Length;

/**
 * Class LengthFactory
 * @package Linio\Factory\Math
 */
class LengthFactory
{
    /**
     * @param $from
     * @param $until
     * @return Length
     */
    public static function build($from, $until) : Length
    {
        return new Length($from, $until);
    }
}
