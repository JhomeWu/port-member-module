<?php

namespace JhomeWu\PortMemmberModule;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register package exposed command here
     * @var array
     */
    protected $commands = [
        Console\InstallCommand::class,
    ];

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        }
        $this->mergeConfigFrom(__DIR__ . '/../config/port-member-module.php', 'port-member-module');
        $this->loadRoutesFrom(__DIR__ . '/../routes/port-member-module.php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Add bindings to the service container.
    }
}
