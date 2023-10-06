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

    /**
     * Register the command.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/jayflashy.php', 'jayflashy');
        $this->app->singleton(RequestLogger::class);
    }

    public function boot()
    {   
        $this->publishes([
            __DIR__.'/../config/jayflashy.php' => config_path('jayflashy.php'),
        ]);
        
        $requestLogger = $this->app[RequestLogger::class];

        if ($this->app->config['my-package.request_logger.enabled']) {
            $requestLogger->log($this->app->request);
        }

    }

}
