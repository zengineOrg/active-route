<?php

namespace Zengine\ActiveRoute;

use Illuminate\Support\ServiceProvider;

class ActiveRouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'active-route');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'active-route');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            //$this->publishes([
            //    __DIR__.'/../config/config.php' => config_path('active-route.php'),
            //], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/active-route'),
            ], 'views');*/
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        //$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'active-route');

        // Register the main class to use with the facade
        $this->app->singleton('active-route', function () {
            return app(ActiveRoute::class);
        });
    }
}
