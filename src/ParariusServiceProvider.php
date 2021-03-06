<?php

namespace LamaLama\Pararius;

use Illuminate\Support\ServiceProvider;
use LamaLama\Pararius\Pararius;

class ParariusServiceProvider extends ServiceProvider
{
    /**
     * Boot.
     */
    public function boot()
    {
        $this->registerPublishables();
    }

    /**
     * Register.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/pararius.php', 'pararius');

        $this->app->bind('pararius', function () {
            return new Pararius();
        });
    }

    /**
     * registerPublishables.
     */
    protected function registerPublishables(): void
    {
        $this->publishes([
            __DIR__.'/../config/pararius.php' => config_path('pararius.php'),
        ], 'config');
    }
}
