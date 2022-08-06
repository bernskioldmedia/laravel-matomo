<?php

namespace BernskioldMedia\LaravelMatomo\Concerns;

use DateTimeInterface;

trait SelectsDate
{

    public string $date = 'today';

    public function date(string $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function today(): static
    {
        return $this->date('today');
    }

    public function yesterday(): static
    {
        return $this->date('yesterday');
    }

    public function lastWeek(): static
    {
        return $this->date('lastWeek');
    }

    public function lastMonth(): static
    {
        return $this->date('lastMonth');
    }

    public function lastYear(): static
    {
        return $this->date('lastYear');
    }

    public function lastX(int $amount): static
    {
        return $this->date("last$amount");
    }

    public function previousX(int $amount): static
    {
        return $this->date("previous$amount");
    }

    public function between(DateTimeInterface|string $from, DateTimeInterface|string $to): static
    {
        if (!is_string($from)) {
            $from = $from->format('Y-m-d');
        }

        if (!is_string($to)) {
            $to = $to->format('Y-m-d');
        }

        return $this->date("$from,$to");
    }

}
