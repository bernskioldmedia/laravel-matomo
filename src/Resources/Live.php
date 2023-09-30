<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class Live extends BaseResource
{
    use SelectsDate,
        SelectsPeriod,
        SelectsSites;

    public function counters(int $lastMinutes = 30): object|array
    {
        return $this->get('getCounters', [
            'lastMinutes' => $lastMinutes,
        ]);
    }

    public function lastVisits(int $amount = null): object|array
    {
        $query = [];

        if ($amount) {
            $query['countVisitorsToFetch'] = $amount;
        }

        return $this->get('getLastVisitsDetails', $query);
    }

    public function visitorProfile(string $visitorId): object|array
    {
        $query = [];

        if ($visitorId) {
            $query['visitorId'] = $visitorId;
        }

        return $this->get('get', $query);
    }

    public function mostRecentId(): object
    {
        return $this->get('getMostRecentVisitorId');
    }

    protected function moduleName(): string
    {
        return 'Live';
    }
}
