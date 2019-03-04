<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AwesomeServiceInterface;
use App\Services\AwesomeService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AwesomeServiceInterface::class, AwesomeService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
