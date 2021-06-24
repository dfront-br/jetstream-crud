<?php

namespace Digitalfront\JetstreamCrud;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Georgechitechi\JetstreamCrud\Skeleton\SkeletonClass
 */
class JetstreamCrudFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire-crud';
    }
}
