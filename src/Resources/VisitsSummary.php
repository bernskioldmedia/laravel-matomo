<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class VisitsSummary extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function all(): object
    {
        return $this->get('get');
    }

    public function visits(): int
    {
        return $this->get('getVisits')?->value ?? 0;
    }

    public function uniqueVisitors(): int
    {
        return $this->get('getUniqueVisitors')?->value ?? 0;
    }

    public function users(): int
    {
        return $this->get('getUsers')?->value ?? 0;
    }

    public function actions(): int
    {
        return $this->get('getActions')?->value ?? 0;
    }

    public function maxActions(): int
    {
        return $this->get('getMaxActions')?->value ?? 0;
    }

    public function bounceCount(): int
    {
        return $this->get('getBounceCount')?->value ?? 0;
    }

    public function visitsConverted(): int
    {
        return $this->get('getVisitsConverted')?->value ?? 0;
    }

    public function secondsOnSite(): int
    {
        return $this->get('getSumVisitsLength')?->value ?? 0;
    }

    public function visitDuration(): string
    {
        return $this->get('getSumVisitsLengthPretty')?->value ?? '';
    }

    protected function moduleName(): string
    {
        return 'VisitsSummary';
    }
}
