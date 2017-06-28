<?php

namespace Linio;

use Linio\Math\Multiply;

use Linio\Exception\NotMultipleException;

/**
 * Class Lookup
 * @package Linio
 */
class Lookup extends Result
{
    /**
     * @var array
     */
    private $lookupTable = [
        [
            'values' => [5, 3] ,
            'text' => 'Linianos'
        ],
        [
            'values' => [5] ,
            'text' => 'IT'
        ],
        [
            'values' => [3] ,
            'text' => 'Linio'
        ],
    ];

    /**
     * @var Multiply
     */
    private $multiply;
    /**
     * @var Response
     */
    private $response;

    /**
     * Lookup constructor.
     */
    public function __construct()
    {
        $this->multiply = new Multiply();
        $this->response = new Response();
    }

    /**
     * @return Response
     */
    public function getResult() : Response
    {
        foreach ($this->getCount()->getNumbers() as $number) {
            $this->response->addResponse(
                $this->lookup($number, $this->lookupTable)
            );
        }
        return $this->response;
    }

    /**
     * @param $number
     * @param $lookupTable
     * @return mixed
     */
    private function lookup($number, $lookupTable)
    {
        $iterator = new \ArrayIterator($lookupTable);
        while ($iterator->valid()) {
            $table = $iterator->current();
            try {
                $this->findMultipleOrFail($number, $table['values']);
                return $table['text'];
            } catch (NotMultipleException $exception) {
                $iterator->offsetUnset($iterator->key());
                $this->lookup($number, $iterator->getArrayCopy());
            }
        }
        return $number;
    }

    /**
     * @param $number
     * @param $values
     */
    private function findMultipleOrFail($number, $values) : void
    {
        foreach ($values as $value) {
            $this->multiply->isMultiple($number, $value);
        }
    }
}
