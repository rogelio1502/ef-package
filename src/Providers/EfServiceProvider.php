<?php

namespace Components;

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
    public function boot(Dashboard $ds)
    {
        $ds->registerResource('scripts','/js/app.js');
        $ds->registerResource('stylesheets','/css/tom-select.default.css');
    }
}