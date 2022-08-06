<?php

namespace BernskioldMedia\LaravelMatomo\Concerns;

trait SelectsSecondaryDimension
{
    public string $secondaryDimension = '';

    public string $flat = '';

    public function secondaryDimension(string $secondaryDimension): static
    {
        $this->secondaryDimension = $secondaryDimension;
        $this->flat = '1';

        return $this;
    }

    public function withActions(): static
    {
        return $this->secondaryDimension('eventAction');
    }

    public function withNames(): static
    {
        return $this->secondaryDimension('eventName');
    }

    public function withCategories(): static
    {
        return $this->secondaryDimension('eventCategory');
    }
}
