<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class MarketingCampaignsReporting extends BaseResource
{
    use SelectsDate,
        SelectsPeriod,
        SelectsSites;

    public function id(): object|array
    {
        return $this->get('getId');
    }

    public function name(): object|array
    {
        return $this->get('getName');
    }

    public function keyword(): object|array
    {
        return $this->get('getKeyword');
    }

    public function source(): object|array
    {
        return $this->get('getSource');
    }

    public function medium(): object|array
    {
        return $this->get('getMedium');
    }

    public function content(): object|array
    {
        return $this->get('getContent');
    }

    public function group(): object|array
    {
        return $this->get('getGroup');
    }

    public function placement(): object|array
    {
        return $this->get('getPlacement');
    }

    public function sourceMedium(): object|array
    {
        return $this->get('getSourceMedium');
    }

    protected function moduleName(): string
    {
        return 'MarketingCampaignsReporting';
    }
}
