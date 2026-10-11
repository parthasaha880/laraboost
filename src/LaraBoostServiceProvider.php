<?php

namespace ParthaSaha\LaraBoost;

use Illuminate\Support\ServiceProvider;
use ParthaSaha\LaraBoost\Commands\BoostNowCommand;

class LaraBoostServiceProvider extends ServiceProvider
{
    /**
     * Register the BoostNow Artisan command.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BoostNowCommand::class,
            ]);
        }
    }
}
