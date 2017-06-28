<?php

namespace Linio\Responsibility;

/**
 * Interface Handler
 * @package Linio\Responsibility
 */
interface Handler
{
    /**
     * @param $number
     * @return mixed
     */
    public function handler($number);

    /**
     * @param Handler $successor
     */
    public function successor(Handler $successor) : void;
}
