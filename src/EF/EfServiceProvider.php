<?php

namespace EF;

use Illuminate\Support\ServiceProvider;

class EfServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../../resources/views', 'ef');
    }
    
}