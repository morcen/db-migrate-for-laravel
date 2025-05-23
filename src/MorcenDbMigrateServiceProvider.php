<?php

namespace Morcen\MorcenDbMigrate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Morcen\MorcenDbMigrate\Commands\MorcenDbMigrateCommand;

class MorcenDbMigrateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('db-migrate-for-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_db_migrate_for_laravel_table')
            ->hasCommand(MorcenDbMigrateCommand::class);
    }
}
