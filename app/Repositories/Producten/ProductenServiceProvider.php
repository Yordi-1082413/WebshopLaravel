<?php 

namespace App\Repositories\Producten;

use Illuminate\Support\ServiceProvider;

class ProductenServiceProvider extends ServiceProvider
{
     /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'App\Repositories\Producten\ProductenRepositoryInterface',
            'App\Repositories\Producten\ProductenRepository'
        );
    }
    
}