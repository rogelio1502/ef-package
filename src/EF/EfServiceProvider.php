<?php

namespace EF;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;
/**
 * Class PasswordServiceProvider
 */
class EfServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    // public function boot(Dashboard $ds)
    // {
    //     $ds->registerResource('scripts','/js/app.js');
    //     $ds->registerResource('stylesheets','/css/tom-select.default.css');
    // }

    // public function register()
    // {
    //     $this->app->singleton('ef', LiveSelect::class);
    // } 
    public function boot(Dashboard $ds)
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../resources/views' => base_path('resources/views/vendor/rogelio1502/ef-package'),
            ], 'views');
        }

        $ds->registerResource('scripts','/js/app.js');
        $ds->registerResource('stylesheets','/css/tom-select.default.css');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'ef');
    }
    
}