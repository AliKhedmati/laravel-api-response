<?php

namespace Alikhedmati\ApiResponse\Providers\Facades;

use Alikhedmati\ApiResponse\Providers\Contracts\ApiInterface;
use Illuminate\Support\Facades\Facade;

class ApiResponse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ApiInterface::class;
    }
}