<?php

namespace Proform\TestPackege;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Proform\TestPackege\TestPackege
 */
class TestPackegeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test-packege';
    }
}
