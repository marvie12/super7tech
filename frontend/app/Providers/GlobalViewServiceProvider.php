<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $useRole = auth()?->user()?->role ?? null;
        view()->share('useRole', $useRole);
    }
}
