<?php

namespace NimDevelopment\FormBuilder;

use Illuminate\Support\ServiceProvider;
use NimDevelopment\FormBuilder\Classes\FormBuilder;

class FormBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'formbuilder');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('form-builder', function(){
            return new FormBuilder();
        });
    }
}
