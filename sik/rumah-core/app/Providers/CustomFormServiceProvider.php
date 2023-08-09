<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend('form.types', function($types, $app) {
            $types[] = new \App\FormTypes\InnovationAttachmentFileType;

            return $types;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
