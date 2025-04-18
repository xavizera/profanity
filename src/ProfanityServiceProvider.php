<?php

namespace Xavizera\Profanity;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Xavizera\Profanity\Commands\ProfanityCommand;

class ProfanityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('profanity')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_profanity_table')
            ->hasCommand(ProfanityCommand::class);
    }
}
