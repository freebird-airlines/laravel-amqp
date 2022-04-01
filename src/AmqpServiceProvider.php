<?php

namespace FreebirdAirlines\Amqp;

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
            if (!config('amqp.connection.ssl')) {
                return new AMQPStreamConnection(
                    config('amqp.connection.host'),
                    config('amqp.connection.port'),
                    config('amqp.connection.username'),
                    config('amqp.connection.password')
                );
            }
            return new AMQPSSLConnection(
                config('amqp.connection.host'),
                config('amqp.connection.port'),
                config('amqp.connection.username'),
                config('amqp.connection.password'),
                '/',
                ['verify_peer' => true]
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
        $this->publishes([
            __DIR__ . '/config/amqp.php' => config_path('amqp.php'),
        ]);
    }

    public function provides()
    {
        return 'Amqp';
    }
}
