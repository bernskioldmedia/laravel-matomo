<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\MatomoClient;
use Illuminate\Support\Traits\Tappable;

abstract class BaseResource
{
    use Tappable;

    public function __construct(
        public MatomoClient $client
    ) {
    }

    public function get(string $functionName, array $params = []): object
    {
        return $this->client->get(array_merge(
            $this->buildQuery($functionName),
            $params
        ));
    }

    public function instance(string $url, string $apiKey): static
    {
        $this->client->instance($url, $apiKey);

        return $this;
    }

    abstract protected function moduleName(): string;

    protected function query(): array
    {
        return [];
    }

    protected function buildQuery(string $functionName): array
    {
        $query = [
            'method' => $this->moduleName().'.'.$functionName,
        ];

        if (property_exists($this, 'sites')) {
            $query['idSite'] = implode(',', $this->sites);
        }

        if (property_exists($this, 'period')) {
            $query['period'] = $this->period;
        }

        if (property_exists($this, 'date')) {
            $query['date'] = $this->date;
        }

        if (property_exists($this, 'amount')) {
            $query['filter_limit'] = $this->amount;
        }

        return array_merge($query, $this->query());
    }
}
