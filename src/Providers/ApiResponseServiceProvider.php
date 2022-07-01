<?php

namespace Alikhedmati\ApiResponse\Providers;

use Alikhedmati\ApiResponse\ApiResponseGenerator;
use Alikhedmati\ApiResponse\Providers\Contracts\ApiInterface;
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
