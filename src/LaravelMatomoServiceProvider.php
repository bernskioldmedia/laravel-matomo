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
}
