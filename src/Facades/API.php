<?php

namespace Alikhedmati\ApiResponse\Facades;

use Alikhedmati\ApiResponse\Contracts\ApiInterface;
use Illuminate\Support\Facades\Facade;

class API extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ApiInterface::class;
    }
}