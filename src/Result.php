<?php

namespace Linio;

use Linio\Factory\Math\CountFactory;
use Linio\Factory\Math\LengthFactory;

/**
 * Class Result
 * @package Linio
 */
abstract class Result
{

    /**
     * @return Response
     */
    abstract public function getResult() : Response;

    /**
     * @return Math\Length
     */
    protected function getLength()
    {
        return LengthFactory::build(1, 100);
    }

    /**
     * @return Number
     */
    protected function getCount()
    {
        return CountFactory::build($this->getLength());
    }
}
