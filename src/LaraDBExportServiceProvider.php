<?php

namespace Bzilee\LaraDBExport;

use Illuminate\Support\ServiceProvider;

class LaraDBExportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->make('Bzile\FileWriter\FileWriter');
        $this->mergeConfigFrom(
            __DIR__.'/config/laraexport.php', 'laraexport'
        );
    }
}
