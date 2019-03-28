<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\channel;
use View;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('channels',channel::all());
        View::share('user',Auth::user());
        
    }
}
