<?php

namespace Linio\Responsibility\Multiple;

use Linio\Exception\NotMultipleException;
use Linio\Math\Multiply;
use Linio\Responsibility\Handler;

/**
 * Class MultipleOf3And5
 * @package Linio\Responsibility\Multiple
 */
class MultipleOf3And5 implements Handler
{
    /**
     *
     */
    const DIVISOR = [3 ,5];
    /**
     *
     */
    const TEXT = 'Linianos';

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
            foreach (self::DIVISOR as $divisor) {
                $multiply->isMultiple($number, $divisor);
            }
            return self::TEXT;
        } catch (NotMultipleException $notMultipleException) {
            unset($notMultipleException);
            return $this->successor->handler($number);
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
