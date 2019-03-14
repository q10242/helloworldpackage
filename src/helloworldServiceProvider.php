<?php

namespace ky\helloworld;

use Illuminate\Support\ServiceProvider;

class helloworldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->app->make(helloworldController::class);
      include(__DIR__ . '/web.php');
      $this->loadViewsFrom(__DIR__ . '/views', 'helloworld');

    }
}
