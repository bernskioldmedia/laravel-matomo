<?php

namespace BernskioldMedia\LaravelMatomo\Concerns;

trait SelectsSites
{
    protected array $sites = [];

    public function sites(array $siteIds = []): static
    {
        $this->sites = $siteIds;

        return $this;
    }

    public function site(int $siteId): static
    {
        return $this->sites([$siteId]);
    }
}
