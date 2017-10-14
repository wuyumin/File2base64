<?php

/*
 * This file is part of the wuyumin/file2base64.
 * (c) Yumin Wu
 * github: https://github.com/wuyumin
 */

namespace File2base64\File2base64\Laravel;

use File2base64\File2base64;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->app->singleton(File2base64::class, function () {
            return new File2base64();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [File2base64::class];
    }
}
