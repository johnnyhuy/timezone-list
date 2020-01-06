<?php

namespace JohnnyHuy\TimezoneList;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

/**
 * TimezoneListServiceProvider
 */
class TimezoneListServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('timezonelist', function ($app) {
            return new TimezoneList();
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('TimezoneList', 'JohnnyHuy\TimezoneList\Facades\TimezoneList');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['timezonelist'];
    }
}
