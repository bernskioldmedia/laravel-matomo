<?php

namespace BernskioldMedia\LaravelMatomo;

use Illuminate\Support\Facades\Http;

class MatomoClient
{
    public function __construct(
        private string $apiKey,
        private string $baseUrl
    ) {
    }

    public function baseUrl(string $url): self
    {
        $this->baseUrl = $url;

        return $this;
    }

    public function apiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function instance(string $url, string $apiKey): self
    {
        return $this->baseUrl($url)->apiKey($apiKey);
    }

    public function get(array $query = []): object
    {
        return Http::baseUrl($this->baseUrl)
            ->get('/', $this->query($query))
            ->throw()
            ->object();
    }

    public static function fromConfig(array $config): static
    {
        return new static($config['api_key'], $config['base_url']);
    }

    protected function baseApiQuery(): array
    {
        return [
            'module' => 'API',
            'format' => 'JSON',
            'token_auth' => $this->apiKey,
        ];
    }

    protected function query(array $query): array
    {
        return array_merge($this->baseApiQuery(), $query);
    }
}
