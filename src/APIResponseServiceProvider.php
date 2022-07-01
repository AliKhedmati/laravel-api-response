<?php

namespace AliKhedmati\ApiResponse;

use Alikhedmati\ApiResponse\Contracts\APIInterface;
use Illuminate\Support\ServiceProvider;

class APIResponseServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(APIInterface::class, fn() => new APIResponse());
    }
}
