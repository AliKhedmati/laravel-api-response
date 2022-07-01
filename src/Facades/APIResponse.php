<?php

namespace Alikhedmati\ApiResponse\Facades;

use Alikhedmati\ApiResponse\Contracts\APIInterface;
use Illuminate\Support\Facades\Facade;

class APIResponse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return APIInterface::class;
    }
}