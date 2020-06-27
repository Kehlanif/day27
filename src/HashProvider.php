<?php

namespace App\packages\functions\encryption\src;

use Illuminate\Support\ServiceProvider;

class HashProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //实例化对象
        $this->app->singleton('encry',function (){//别名以便访问
            return new Hasher();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
