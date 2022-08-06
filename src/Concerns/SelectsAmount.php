<?php

namespace BernskioldMedia\LaravelMatomo\Concerns;

trait SelectsAmount
{

    protected int $amount = 100;

    public function amount(int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function allData(): static
    {
        return $this->amount(-1);
    }
}
