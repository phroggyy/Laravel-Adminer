<?php

namespace Phroggyy\LaravelAdminer;


use Illuminate\Support\ServiceProvider;
use Phroggyy\LaravelAdminer\Console\LatestCommand;

class AdminerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app['command.adminer.latest'] = $this->app->share(
            function ($app) {
                return new LatestCommand($app['files']);
            }
        );

        $this->commands('command.adminer.latest');
    }

    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }
    }

    public function provides()
    {
        return ['command.adminer.latest'];
    }


}