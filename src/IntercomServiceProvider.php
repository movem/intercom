<?php

namespace Darkin1\Intercom;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Intercom\IntercomClient;

class IntercomServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Allow users to publish config to override the defaults.
        $this->publishes([
            __DIR__.'/../config/intercom.php' => config_path('intercom.php'),
        ], 'darkin1/intercom');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Use the provided config as default.
        $this->mergeConfigFrom(
            __DIR__.'/../config/intercom.php', 'intercom'
        );

        $this->app->singleton('intercom', function ($app) {
            $accessToken = $app['config']->get('intercom.access_token');

            $intercom = new IntercomClient($accessToken, null);

            return new IntercomApi($intercom);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['intercom'];
    }
}
