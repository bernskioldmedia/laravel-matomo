<?php

namespace BernskioldMedia\LaravelMatomo;

use BernskioldMedia\LaravelMatomo\Exceptions\InvalidConfiguration;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMatomoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-matomo')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->bind(MatomoClient::class, function () {
            return MatomoClient::fromConfig(config('matomo'));
        });

        $this->app->bind(Matomo::class, function () {
            $this->protectAgainstInvalidConfiguration(config('matomo'));

            $client = app(MatomoClient::class);

            return new Matomo($client);
        });
    }

    protected function protectAgainstInvalidConfiguration(array $config): void
    {
        if (empty($config['api_key'])) {
            throw InvalidConfiguration::noApiKey();
        }

        if (empty($config['base_url'])) {
            throw InvalidConfiguration::emptyBaseUrl();
        }
    }
}
