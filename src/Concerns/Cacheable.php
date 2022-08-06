<?php

namespace BernskioldMedia\LaravelMatomo\Concerns;

trait Cacheable
{
    protected int $cacheDurationInSeconds = 60;
    protected bool $cache = true;

    public function cache(bool $cache = true): self
    {
        $this->cache = $cache;

        return $this;
    }

    public function dontCache(): self
    {
        return $this->cache(false);
    }

    public function cacheForSeconds(int $seconds): self
    {
        $this->cacheDurationInSeconds = $seconds;

        return $this;
    }

    public function cacheForMinutes(int $minutes): self
    {
        $this->cacheDurationInSeconds = $minutes * 60;

        return $this;
    }
}
