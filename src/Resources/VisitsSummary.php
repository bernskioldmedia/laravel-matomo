<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

/**
 * VisitsSummary API lets you access the core web analytics metrics:
 * visits, unique visitors, count of actions (page views & downloads & clicks on outlinks),
 * time on site, bounces and converted visits.
 */
class VisitsSummary extends BaseResource
{
    use SelectsDate,
        SelectsPeriod,
        SelectsSites;

    public function all(): object|array
    {
        return $this->get('get');
    }

    public function visits(): object|array
    {
        return $this->get('getVisits');
    }

    public function uniqueVisitors(): object|array
    {
        return $this->get('getUniqueVisitors');
    }

    public function users(): object|array
    {
        return $this->get('getUsers');
    }

    public function actions(): object|array
    {
        return $this->get('getActions');
    }

    public function maxActions(): object|array
    {
        return $this->get('getMaxActions');
    }

    public function bounceCount(): object|array
    {
        return $this->get('getBounceCount');
    }

    public function visitsConverted(): object|array
    {
        return $this->get('getVisitsConverted');
    }

    public function secondsOnSite(): object|array
    {
        return $this->get('getSumVisitsLength');
    }

    public function visitDuration(): object|array
    {
        return $this->get('getSumVisitsLengthPretty');
    }

    protected function moduleName(): string
    {
        return 'VisitsSummary';
    }
}
