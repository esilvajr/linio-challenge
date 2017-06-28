<?php


namespace Linio\Responsibility;

use Linio\Responsibility\Multiple\MultipleOf3;
use Linio\Responsibility\Multiple\MultipleOf3And5;
use Linio\Responsibility\Multiple\MultipleOf5;

/**
 * Class MultipleResponsibility
 * @package Linio\Responsibility
 */
class MultipleResponsibility
{

    /**
     * @param $number
     * @return mixed|string
     */
    public function client($number)
    {
        $multipleOf3And5 = new MultipleOf3And5();
        $multipleOf5 = new MultipleOf5();
        $multipleOf3 = new MultipleOf3();

        $multipleOf3And5->successor($multipleOf5);
        $multipleOf5->successor($multipleOf3);

        return $multipleOf3And5->handler($number);
    }
}
