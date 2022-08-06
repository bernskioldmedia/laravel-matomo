<?php

namespace BernskioldMedia\LaravelMatomo;

use BernskioldMedia\LaravelMatomo\Commands\LaravelMatomoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMatomoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-matomo')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-matomo_table')
            ->hasCommand(LaravelMatomoCommand::class);
    }
}
