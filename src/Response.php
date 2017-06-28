<?php

namespace Linio;

/**
 * Class Response
 * @package Linio
 */
class Response
{

    /**
     * @var array
     */
    private $response = array();

    /**
     * @param $response
     */
    public function addResponse($response) : void
    {
        array_push($this->response, $response);
    }

    /**
     * @return string
     */
    public function toJson() : string
    {
        return json_encode($this->response, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @return array
     */
    public function toArray() : array
    {
        return $this->response;
    }

    /**
     *
     */
    public function toPrintConsole() : void
    {
        foreach ($this->response as $item) {
            print $item . PHP_EOL;
        }
    }

    /**
     *
     */
    public function toPrintHtml() : void
    {
        foreach ($this->response as $item) {
            print $item . '<br>';
        }
    }
}
