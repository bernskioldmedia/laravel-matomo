<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class Actions extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function summary(): object|array
    {
        return $this->get('get');
    }

    public function pageUrls(): object|array
    {
        return $this->get('getPageUrls');
    }

    public function pageTitles(): object|array
    {
        return $this->get('getPageTitles');
    }

    public function entryPageUrls(): object|array
    {
        return $this->get('getEntryPageUrls');
    }

    public function entryPageTitles(): object|array
    {
        return $this->get('getEntryPageTitles');
    }

    public function exitPageUrls(): object|array
    {
        return $this->get('getExitPageUrls');
    }

    public function exitPageTitles(): object|array
    {
        return $this->get('getExitPageTitles');
    }

    public function forUrl(string $url): object|array
    {
        return $this->get('getPageUrl', [
            'pageUrl' => $url,
        ]);
    }

    public function forTitle(string $title): object|array
    {
        return $this->get('getPageTitle', [
            'pageUrl' => $title,
        ]);
    }

    public function downloads(): object|array
    {
        return $this->get('getDownloads');
    }

    public function downloadsFor(string $url): object|array
    {
        return $this->get('getDownload', [
            'url' => $url,
        ]);
    }

    public function outlinks(): object|array
    {
        return $this->get('getOutlinks');
    }

    public function outlinksFor(string $url): object|array
    {
        return $this->get('getOutlink', [
            'url' => $url,
        ]);
    }

    public function siteSearchKeywords(): object|array
    {
        return $this->get('getSiteSearchKeywords');
    }

    public function siteSearchNoResultsKeywords(): object|array
    {
        return $this->get('getSiteSearchNoResultKeywords');
    }

    public function siteSearchCategories(): object|array
    {
        return $this->get('getSiteSearchCategories');
    }

    protected function moduleName(): string
    {
        return 'Contents';
    }
}
