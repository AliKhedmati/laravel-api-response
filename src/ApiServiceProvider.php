<?php

namespace Alikhedmati\ApiResponse;

use Alikhedmati\ApiResponse\Contracts\ApiContract;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */

    public function register(): void
    {
        $this->app->bind('api', fn() => new Api());
    }

    /**
     * @return void
     */

    public function boot(): void
    {
        $this->loadTranslationsFrom(
            path: __DIR__.'/../lang',
            namespace: 'api-response'
        );
    }
}