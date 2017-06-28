<?php

namespace Linio;

use Linio\Responsibility\MultipleResponsibility;

/**
 * Class Client
 * @package Linio
 */
class Client extends Result
{
    /**
     * @var MultipleResponsibility
     */
    private $multipleResponsibility;
    /**
     * @var Response
     */
    private $response;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->multipleResponsibility = new MultipleResponsibility();
        $this->response = new Response();
    }

    /**
     * @return Response
     */
    public function getResult() : Response
    {
        foreach ($this->getCount()->getNumbers() as $number) {
            $this->response->addResponse(
                $this->multipleResponsibility->client($number)
            );
        }
        return $this->response;
    }
}
