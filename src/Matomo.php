<?php

namespace BernskioldMedia\LaravelMatomo;

use BernskioldMedia\LaravelMatomo\Resources\VisitsSummary;

class Matomo
{
    public function __construct(
        public MatomoClient $client
    ) {
    }

    public function visitsSummary(): VisitsSummary
    {
        return new VisitsSummary($this->client);
    }
}
