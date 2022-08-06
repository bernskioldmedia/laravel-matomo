<?php

namespace BernskioldMedia\LaravelMatomo;

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
            $client = app(MatomoClient::class);

            return new Matomo($client);
        });
    }
}
