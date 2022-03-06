<?php

namespace FreebirdAirlines\Amqp\Tests;


use FreebirdAirlines\Amqp\AmqpServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract class. 
 */
abstract class AbstractTestCase extends AbstractPackageTestCase 
{
  public function setTheApiKey()
  {
      $this->app->config->set('amqp.apikey', 'abcdefg');
  }

  protected function getServiceProviderClass($app) 
  {
  	return AmqpServiceProvider::class;
  }
}
