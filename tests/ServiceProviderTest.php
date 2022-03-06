<?php

namespace FreebirdAirlines\Amqp\Tests;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the servicer provider test class.
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testAmqpConnectionIsInjectable()
    {
        $this->assertIsInjectable(AMQPStreamConnection::class);
    }
}