<?php

namespace Foostart\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
       
        $this->loadViewsFrom(__DIR__.'/views','demo');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/router.php';
        $this->app->make('Foostart\Sample\Controllers\SampleController');
    }
}
