<?php

namespace Alikhedmati\Api;

use Alikhedmati\Api\Contracts\ApiInterface;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(ApiInterface::class, fn() => new Api());
    }
}