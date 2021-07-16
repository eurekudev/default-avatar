<?php

namespace Eureku\Packages;

use Illuminate\Support\ServiceProvider;

class DefaultAvatarServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('avatar', function ($app) {
            return new Avatar();
        });
    }

    public function boot()
    {
        //
    }
}