<?php

namespace Alikhedmati\ApiResponse\Facades;

use Alikhedmati\ApiResponse\Contracts\ApiInterface;
use Illuminate\Support\Facades\Facade;

class Api extends Facade
{
    /**
     * @return string
     */

    protected static function getFacadeAccessor(): string
    {
        return ApiInterface::class;
    }
}