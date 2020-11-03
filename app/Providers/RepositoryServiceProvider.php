<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\PescadorRepository::class, \App\Repositories\PescadorRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PescadoRepository::class, \App\Repositories\PescadoRepositoryEloquent::class);
        //:end-bindings:
    }
}
