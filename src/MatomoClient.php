<?php

namespace BernskioldMedia\LaravelMatomo;

use BernskioldMedia\LaravelMatomo\Concerns\Cacheable;
use BernskioldMedia\LaravelMatomo\Exceptions\InvalidConfiguration;
use BernskioldMedia\LaravelMatomo\Exceptions\MatomoException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class MatomoClient
{
    use Cacheable;

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
        if (empty($this->baseUrl)) {
            throw InvalidConfiguration::emptyBaseUrl();
        }

        $query = $this->query($query);
        $cacheKey = md5(json_encode([
            'url' => $this->baseUrl,
            'key' => $this->apiKey,
            'query' => $query,
        ]));

        if ($this->cache === false) {
            Cache::forget($cacheKey);
        }

        $response = Cache::remember($cacheKey, $this->cacheDurationInSeconds, function () use ($query) {
            return Http::baseUrl($this->baseUrl)
                ->get('/', $query)
                ->throw()
                ->object();
        });

        if (isset($response->result) && $response->result === 'error') {
            throw MatomoException::requestError($response->message ?? '');
        }

        return $response;
    }

    public static function fromConfig(array $config): static
    {
        return new static($config['api_key'], $config['base_url']);
    }

    protected function baseApiQuery(): array
    {
        if (empty($this->apiKey)) {
            throw InvalidConfiguration::noApiKey();
        }

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
