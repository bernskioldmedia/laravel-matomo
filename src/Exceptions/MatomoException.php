<?php

namespace BernskioldMedia\LaravelMatomo\Exceptions;

use Exception;

class MatomoException extends Exception
{

    public static function requestError(string $message): self
    {
        return new static($message);
    }

}
