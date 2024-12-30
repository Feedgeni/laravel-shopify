<?php

namespace Kudobuzz\Shopify;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class ShopifyServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__.'/../config/shopify.php' => config_path('shopify.php'),
        ]);

        $this->app->alias('Shopify', 'Kudobuzz\Shopify\Facades\Shopify');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('shopify',fn($app) => new Shopify(new Client));
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
