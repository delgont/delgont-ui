<?php

namespace Delgont\CmsUi;

use Illuminate\Support\ServiceProvider;

class DelgontUiServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/../views', 'delgont');

        if ($this->app->runningInConsole()) {
            $this->registerPublishables();
        }
        
    }

    private function registerPublishables() : void
    {
        // Publish Assets
        $this->publishes([
            __DIR__.'/../assets' => public_path(),
          ], 'delgont-assets');

    }

    private function registerCommands() : void
    {
        
    }

  
}
