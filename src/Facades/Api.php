<?php

namespace Alikhedmati\Api\Facades;

use Alikhedmati\Api\Contracts\ApiInterface;
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