<?php

namespace Alikhedmati\ApiResponse\Facades;

use Illuminate\Support\Facades\Facade;
use Alikhedmati\ApiResponse\Contracts\APIInterface;

class APIResponse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return APIInterface::class;
    }
}