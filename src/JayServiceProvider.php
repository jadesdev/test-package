<?php

namespace Jayflashy\LicenseChecker;

use Illuminate\Support\ServiceProvider;

class JayServiceProvider  extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    public function boot()
    {   
        $this->publishes([
            __DIR__.'/../config/jayflashy.php' => config_path('jayflashy.php'),
        ]);

        $this->app['router']->middlewareGroup('web', [
            'license-checker'
        ]);
    }

    /**
     * Register the command.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/jayflashy.php', 'jayflashy');

        $this->app['router']->middleware('license-checker', \Jayflashy\LicenseChecker\Middleware\CheckMiddleware::class);
    }

}
