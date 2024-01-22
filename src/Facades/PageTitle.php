<?php

namespace ATereshchuk\PageTitle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class PageTitle.
 *
 * @author Andrii Tereshchuk <andrii@tereshch.uk>
 */
class PageTitle extends Facade
{
    /**
     * Name of the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'PageTitle';
    }
}
