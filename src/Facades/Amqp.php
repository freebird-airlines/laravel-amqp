<?php

namespace FreebirdAirlines\Amqp\Facades;

use Illuminate\Support\Facades\Facade;

class Amqp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Amqp';
    }
}