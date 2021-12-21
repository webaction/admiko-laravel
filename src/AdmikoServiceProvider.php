<?php

namespace Webaction\Admiko;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webaction\Admiko\Commands\AdmikoCommand;

class AdmikoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admiko-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admiko-laravel_table')
            ->hasCommand(AdmikoCommand::class);
    }
}
