<?php

namespace Morcen\MorcenDbMigrate\Commands;

use Illuminate\Console\Command;

class MorcenDbMigrateCommand extends Command
{
    public $signature = 'db-migrate-for-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
