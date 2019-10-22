<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\User;
use App\Profile;
use App\Observers\UserObserver;

use App\Observers\ProfileObserver;

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
        User::observe(UserObserver::class);
        Profile::observe(ProfileObserver::class);
    }
    
}
