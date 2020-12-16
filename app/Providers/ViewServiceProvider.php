<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header' , function($view)
        {
            $view->with('cats' , Category::select('id' , 'name')->get());
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
