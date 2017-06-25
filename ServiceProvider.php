<?php namespace Ney\Lagger;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

  protected $commands = [

  ];

  public function register()
  {

  }

  public function boot()
  {

    $this->loadRoutesFrom(__DIR__ . '/routes.php');

    $this->loadViewsFrom(__DIR__ . '/views', 'lagger');

    $this->publishes([
       __DIR__.'/assets' => public_path('vendor/lagger'),
    ], 'public');

    $this->publishes([
       __DIR__.'/config.php' => config_path('lagger.php')
    ], 'config');


     if (isset($this->commands[0])) {
       $this->commands($this->commands);
     }


    //  $configs = config('lagger.dirs');
    //  config(['lagger.dirs' => array_merge(
    //    [base_path('packages/ney/lagger/')],
    //    $configs
    //  )]);

  }
}
