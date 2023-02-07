<?php

namespace EF\Form\Fields;

use Illuminate\Support\ServiceProvider;

class EfServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../../resources/views', 'ef');
    }
    
}