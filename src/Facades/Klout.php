<?php namespace IqbalHakim\Klout\Facades;

use Illuminate\Support\Facades\Facade;

class Klout extends Facade {
  
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return 'IqbalHakim\Klout';
  }
  
} 