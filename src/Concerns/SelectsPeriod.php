<?php

namespace BernskioldMedia\LaravelMatomo\Concerns;

trait SelectsPeriod
{
    public string $period = 'day';

    public function day(): static
    {
        return $this->period('day');
    }

    public function week(): static
    {
        return $this->period('week');
    }

    public function month(): static
    {
        return $this->period('month');
    }

    public function year(): static
    {
        return $this->period('year');
    }

    public function period(string $period): static
    {
        $this->period = $period;

        return $this;
    }
}
