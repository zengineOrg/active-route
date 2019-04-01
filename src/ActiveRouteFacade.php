<?php

namespace Zengine\ActiveRoute;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zengine\ActiveRoute\Skeleton\SkeletonClass
 */
class ActiveRouteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'active-route';
    }
}
