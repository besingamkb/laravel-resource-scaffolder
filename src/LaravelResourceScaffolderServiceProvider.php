<?php

namespace Besingamkb\LaravelResourceScaffolder;

use Besingamkb\LaravelResourceScaffolder\Commands\LaravelResourceScaffolderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelResourceScaffolderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-resource-scaffolder')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-resource-scaffolder_table')
            ->hasCommand(LaravelResourceScaffolderCommand::class);
    }
}
