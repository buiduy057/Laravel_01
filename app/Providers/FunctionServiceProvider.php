<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FunctionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // foreach (glob(app_path() . '/Functions/*.php') as $file) {
        //     require_once($file);
        // }
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
