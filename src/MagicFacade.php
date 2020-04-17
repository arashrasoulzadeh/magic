<?php

namespace Arashrasoulzadeh\Magic;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Arashrasoulzadeh\Magic\Skeleton\SkeletonClass
 */
class MagicFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'magic';
    }
}
