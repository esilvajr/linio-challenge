<?php

namespace Linio\Math;

use Linio\Math\Number;

class Count implements Countable
{
    private $counter;
    private $number;

    public function __construct()
    {
        $this->number = new Number();
    }

    public function count(Length $length): Number
    {
        for ($i = $length->getFrom(); $i <= $length->getUntil(); $i++) {
            $this->counter($i);
        }
        return $this->counter;
    }

    private function counter(int $int) : void
    {
        $this->counter = $this->number->setNumber($int);
    }
}
