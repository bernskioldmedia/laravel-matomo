<?php

namespace BernskioldMedia\LaravelMatomo;

use BernskioldMedia\LaravelMatomo\Resources\Actions;
use BernskioldMedia\LaravelMatomo\Resources\Contents;
use BernskioldMedia\LaravelMatomo\Resources\DevicesDetection;
use BernskioldMedia\LaravelMatomo\Resources\Events;
use BernskioldMedia\LaravelMatomo\Resources\Goals;
use BernskioldMedia\LaravelMatomo\Resources\Live;
use BernskioldMedia\LaravelMatomo\Resources\MarketingCampaignsReporting;
use BernskioldMedia\LaravelMatomo\Resources\PagePerformance;
use BernskioldMedia\LaravelMatomo\Resources\Referrers;
use BernskioldMedia\LaravelMatomo\Resources\Resolution;
use BernskioldMedia\LaravelMatomo\Resources\UserCountry;
use BernskioldMedia\LaravelMatomo\Resources\UserLanguage;
use BernskioldMedia\LaravelMatomo\Resources\VisitFrequency;
use BernskioldMedia\LaravelMatomo\Resources\VisitorInterest;
use BernskioldMedia\LaravelMatomo\Resources\VisitsSummary;
use BernskioldMedia\LaravelMatomo\Resources\VisitTime;

class Matomo
{
    public function __construct(
        public MatomoClient $client
    ) {
    }

    public function actions(): Actions
    {
        return new Actions($this->client);
    }

    public function contents(): Contents
    {
        return new Contents($this->client);
    }

    public function devices(): DevicesDetection
    {
        return new DevicesDetection($this->client);
    }

    public function events(): Events
    {
        return new Events($this->client);
    }

    public function goals(): Goals
    {
        return new Goals($this->client);
    }

    public function live(): Live
    {
        return new Live($this->client);
    }

    public function campaigns(): MarketingCampaignsReporting
    {
        return new MarketingCampaignsReporting($this->client);
    }

    public function performance(): PagePerformance
    {
        return new PagePerformance($this->client);
    }

    public function referrers(): Referrers
    {
        return new Referrers($this->client);
    }

    public function resolutions(): Resolution
    {
        return new Resolution($this->client);
    }

    public function geography(): UserCountry
    {
        return new UserCountry($this->client);
    }

    public function languages(): UserLanguage
    {
        return new UserLanguage($this->client);
    }

    public function frequencies(): VisitFrequency
    {
        return new VisitFrequency($this->client);
    }

    public function durations(): VisitTime
    {
        return new VisitTime($this->client);
    }

    public function engagement(): VisitorInterest
    {
        return new VisitorInterest($this->client);
    }

    public function summary(): VisitsSummary
    {
        return new VisitsSummary($this->client);
    }
}
