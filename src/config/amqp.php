<?php

return [

        'connection' => [
            'host' => env('AMQP_HOST', '127.0.0.1'),
            'port' => env('AMQP_PORT', 5672),
            'username' => env('AMQP_USER', 'guest'),
            'password' => env('AMQP_PASS', 'guest')
        ],
];