<?php

namespace Alikhedmati\ApiResponse;

use Alikhedmati\ApiResponse\Contracts\ApiInterface;
use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(ApiInterface::class, fn() => new ApiResponseGenerator());
    }
}