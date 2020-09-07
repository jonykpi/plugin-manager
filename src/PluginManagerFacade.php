<?php

namespace PluginManager\PluginManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PluginManager\PluginManager\Skeleton\SkeletonClass
 */
class PluginManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'plugin-manager';
    }
}
