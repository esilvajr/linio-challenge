<?php

namespace Linio\Responsibility\Multiple;

use Linio\Exception\NotMultipleException;
use Linio\Math\Multiply;
use Linio\Responsibility\Handler;

/**
 * Class MultipleOf3
 * @package Linio\Responsibility\Multiple
 */
class MultipleOf3 implements Handler
{

    /**
     *
     */
    const DIVISOR = 3;
    /**
     *
     */
    const TEXT = 'Linio';

    /**
     * @var
     */
    private $successor;

    /**
     * @param $number
     * @return string
     */
    public function handler($number)
    {
        try {
            $multiply = new Multiply();
            $multiply->isMultiple($number, self::DIVISOR);
            return self::TEXT;
        } catch (NotMultipleException $notMultipleException) {
            unset($notMultipleException);
            return $number;
        }
    }

    /**
     * @param Handler $successor
     */
    public function successor(Handler $successor) : void
    {
        $this->successor = $successor;
    }
}
