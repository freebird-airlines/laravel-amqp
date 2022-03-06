<?php

namespace FreebirdAirlines\Amqp\Tests\Facades;


use FreebirdAirlines\Amqp\Facades\Amqp;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use FreebirdAirlines\Amqp\Tests\AbstractTestCase;

class BugherdTest extends AbstractTestCase
{
    use FacadeTrait;

  /**
   * Get the facade accessor.
   *
   * @return string
   */
  protected function getFacadeAccessor()
  {
      return 'Amqp';
  }

  /**
   * Get the facade class.
   *
   * @return string
   */
  protected function getFacadeClass()
  {
      return Amqp::class;
  }
}