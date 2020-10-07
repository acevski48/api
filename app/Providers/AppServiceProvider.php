<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\EmployeeInterface;
use App\Repositories\ApiEmployeeRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmployeeInterface::class, ApiEmployeeRepository::class);
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
