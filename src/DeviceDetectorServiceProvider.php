<?php

namespace Kwenziwa\DeviceDetector;

use Illuminate\Support\ServiceProvider;

class DeviceDetectorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(DeviceDetector::class, function ($app) {
            return new DeviceDetector();
        });
    }

    public function boot()
    {
        //
    }
}
