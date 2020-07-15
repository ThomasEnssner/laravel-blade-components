<?php

namespace LocalDynamics\LaravelBladeComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LocalDynamics\LaravelBladeComponents\Skeleton\SkeletonClass
 */
class LaravelBladeComponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-blade-components';
    }
}
