<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class Goals extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function summary(?int $goalId = null): object|array
    {
        $query = [];

        if ($goalId) {
            $query['idGoal'] = $goalId;
        }

        return $this->get('get', $query);
    }

    public function all(): object|array
    {
        return $this->get('getGoals');
    }

    public function daysToConversion(): object|array
    {
        return $this->get('getDaysToConversion');
    }

    public function visitsToConversion(): object|array
    {
        return $this->get('getVisitsUntilConversion');
    }

    public function productSkus(): object|array
    {
        return $this->get('getItemsSku');
    }

    public function productNames(): object|array
    {
        return $this->get('getItemsName');
    }

    public function productCategories(): object|array
    {
        return $this->get('getItemsCategory');
    }

    protected function moduleName(): string
    {
        return 'Goals';
    }
}
