<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class Referrers extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function summary(): object|array
    {
        return $this->get('get');
    }

    public function types(): object|array
    {
        return $this->get('getReferrerType');
    }

    public function all(): object|array
    {
        return $this->get('getAll');
    }

    public function keywords(): object|array
    {
        return $this->get('getKeywords');
    }

    public function searchEngines(): object|array
    {
        return $this->get('getSearchEngines');
    }

    public function campaigns(): object|array
    {
        return $this->get('getCampaigns');
    }

    public function websites(): object|array
    {
        return $this->get('getWebsites');
    }

    public function socials(): object|array
    {
        return $this->get('getSocials');
    }

    public function socialUrls(): object|array
    {
        return $this->get('getUrlsForSocial');
    }

    public function searchEnginesCount(): object|array
    {
        return $this->get('getNumberOfDistinctSearchEngines');
    }

    public function socialNetworksCount(): object|array
    {
        return $this->get('getNumberOfDistinctSocialNetworks');
    }

    public function keywordsCount(): object|array
    {
        return $this->get('getNumberOfDistinctKeywords');
    }

    public function campaignsCount(): object|array
    {
        return $this->get('getNumberOfDistinctCampaigns');
    }

    public function websitesCount(): object|array
    {
        return $this->get('getNumberOfDistinctWebsites');
    }

    public function websiteUrlsCount(): object|array
    {
        return $this->get('getNumberOfDistinctWebsitesUrls');
    }

    protected function moduleName(): string
    {
        return 'Referrers';
    }
}
