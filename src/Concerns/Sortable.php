<?php

namespace BernskioldMedia\LaravelMatomo\Concerns;

trait Sortable
{
    protected string $sortOrder = 'asc';
    protected ?string $sortColumn = null;

    public function sortBy(string $column, $order = 'asc'): static
    {
        $this->sortColumn = $column;
        $this->sortOrder = $order;

        return $this;
    }

    public function sortByDesc(string $column): static
    {
        return $this->sortBy($column, 'desc');
    }
}
