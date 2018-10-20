<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\ServiceRequest;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('layouts.sidebar', function($view) {

            $view->with('archives', \App\ServiceRequest::archives());
        
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
