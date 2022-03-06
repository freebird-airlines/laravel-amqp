<?php

namespace FreebirdAirlines\Amqp\Providers;

use Illuminate\Support\ServiceProvider;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class AmqpServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Amqp', function ($app) {
            return new AMQPStreamConnection(
                config('amqp.connection.host'),
                config('amqp.connection.port'),
                config('amqp.connection.username'),
                config('amqp.connection.password')
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    public function provides()
    {
        return 'Amqp';
    }
}
