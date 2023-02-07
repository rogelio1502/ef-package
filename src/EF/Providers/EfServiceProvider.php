<?php

namespace EF\Providers;

use Illuminate\Support\ServiceProvider;

class EfServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../../resources/views', 'ef');
    }
    
}