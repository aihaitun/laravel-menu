<?php
namespace Menu;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $container = Menu::getContainer();
    $container['url'] = $this->app['url'];

    Menu::setContainer($container);
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array('menu');
  }

}
