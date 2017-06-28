<?php

namespace Linio\Exception;

use Throwable;

/**
 * Class NotMultipleException
 * @package Linio\Exception
 */
class NotMultipleException extends \Exception
{
    /**
     *
     */
    const MESSAGE = 'Not Found. There are no multiple for this number.';

    /**
     *
     */
    const CODE = 404;

    /**
     * NotMultipleException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        $message = self::MESSAGE,
        $code = self::CODE,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
