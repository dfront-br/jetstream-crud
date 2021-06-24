<?php

namespace Digitalfront\JetstreamCrud;

use Digitalfront\JetstreamCrud\Commands\JetstreamCrudGenerator;
use Digitalfront\JetstreamCrud\Commands\LivewireInstall;
use Illuminate\Support\ServiceProvider;

class JetstreamCrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            //Publishing config file
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('livewire-crud.php'),
            ], 'config');

            // Registering package commands.
            $this->commands([
                JetstreamCrudGenerator::class,
                LivewireInstall::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'livewire-crud');

        // Register the main class to use with the facade
        $this->app->singleton('livewire-crud', function () {
            return new JetstreamCrud;
        });
    }
}
