<?php

namespace App\Providers;

use App\Collaborator;
use App\Example;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Example', function (){

            $collabolator = new Collaborator();

            $foo = 'foobar';
            return new Example($collabolator, $foo);
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
