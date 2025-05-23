<?php

namespace Morcen\MorcenDbMigrate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Morcen\MorcenDbMigrate\MorcenDbMigrate
 */
class MorcenDbMigrate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Morcen\MorcenDbMigrate\MorcenDbMigrate::class;
    }
}
