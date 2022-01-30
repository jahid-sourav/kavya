<?php

namespace App\Providers;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //

        Paginator::useBootstrap();

        View::composer(['front-end.includes.header', 'back-end.pages.add-blog', 'back-end.pages.edit-blog'], function($view){
            $view->with('categories', Category::all());
        });
    }
}
