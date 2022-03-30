<?php

namespace App\Providers;

use App\Repository\AdminRepository;
use App\Repository\AutoRepository;
use App\Repository\IAdminRepository;
use App\Repository\IAutoRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IAutoRepository::class, AutoRepository::class);
        $this->app->bind(IAdminRepository::class, AdminRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
