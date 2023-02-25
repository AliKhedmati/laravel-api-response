<?php

namespace Alikhedmati\ApiResponse;

use Alikhedmati\ApiResponse\Contracts\ApiContract;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ApiContract::class, fn() => new Api());
    }
}