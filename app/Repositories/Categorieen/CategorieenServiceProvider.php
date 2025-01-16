<?php 

namespace App\Repositories\Categorieen;

use Illuminate\Support\ServiceProvider;

class CategorieenServiceProvider extends ServiceProvider
{
     /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'App\Repositories\Categorieen\CategorieenRepositoryInterface',
            'App\Repositories\Categorieen\CategorieenRepository'
        );
    }
    
}