<?php

namespace BernskioldMedia\LaravelMatomo\Facades;

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
use Illuminate\Support\Facades\Facade;

/**
 * @method static Actions actions()
 * @method static MarketingCampaignsReporting campaigns()
 * @method static Contents contents()
 * @method static DevicesDetection devices()
 * @method static VisitTime durations()
 * @method static VisitorInterest engagement()
 * @method static Events events()
 * @method static VisitFrequency frequencies()
 * @method static UserCountry geography()
 * @method static Goals goals()
 * @method static UserLanguage languages()
 * @method static Live live()
 * @method static PagePerformance performance()
 * @method static Referrers referrers()
 * @method static Resolution resolutions()
 * @method static VisitsSummary summary()
 *
 * @see \BernskioldMedia\LaravelMatomo\Matomo
 */
class Matomo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BernskioldMedia\LaravelMatomo\Matomo::class;
    }
}
