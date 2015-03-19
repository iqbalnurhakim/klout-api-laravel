<?php namespace IqbalHakim\Klout;

use Illuminate\Support\ServiceProvider;
use IqbalHakim\Klout\KloutAPI;
class KloutServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = true;
  /**
   * Boot the service provider.
   *
   * @return void
   */
  public function boot()
  {
      $this->publishes([
          __DIR__.'/config/klout_config.php' => config_path('klout_config.php'),
      ], 'config');
  }
  
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    // die('asd');
    
    // var_dump($config);
    $this->app->singleton('IqbalHakim\Klout', function(){
      $config = $this->app['config']->get('klout_config.klout');  
      return new KloutApi($config['app_id'], $config['version']);
    });
  }
  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array('IqbalHakim\Klout');
  }

}