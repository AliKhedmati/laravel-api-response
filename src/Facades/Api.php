<?php

namespace Alikhedmati\ApiResponse\Facades;

use Alikhedmati\ApiResponse\Contracts\ApiContract;
use Illuminate\Support\Facades\Facade;

class Api extends Facade
{
    /**
     * @return string
     */

    protected static function getFacadeAccessor(): string
    {
        return ApiContract::class;
    }
}