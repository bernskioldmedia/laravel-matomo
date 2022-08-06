<?php

namespace BernskioldMedia\LaravelMatomo\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{
    public static function noApiKey(): static
    {
        return new static('No Matomo API key set. You must set MATOMO_API_KEY for the Matomo API to work, or provide an instance when running the query.');
    }

    public static function emptyBaseUrl(): static
    {
        return new static('The Matomo url was empty. Please make sure that MATOMO_BASE_URL is a valid and non-empty URL string, or that an instance is set when running the query.');
    }
}
