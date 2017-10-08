<?php

namespace YangJiSen\Hashing;

use Illuminate\Support\ServiceProvider;

class HashingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5Hash', function(){
            return new MD5Hasher();
        });

        $this->app->singleton('clearHash', function(){
            return new ClearHasher();
        });
    }
}
