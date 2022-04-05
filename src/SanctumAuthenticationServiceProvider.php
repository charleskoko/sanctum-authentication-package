<?php

namespace Charleskoko\SanctumAuthentication;

use Illuminate\Support\ServiceProvider;

class SanctumAuthenticationServiceProvider extends ServiceProvider
{


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->mergeConfigFrom(__DIR__.'/config/sanctumAuthentication.php','sanctumAuthentication');
        $this->publishes([
            __DIR__.'/config/sanctumAuthentication.php' => config_path('sanctumAuthentication.php')
        ]);
    }

    public function register()
    {
    }
}
