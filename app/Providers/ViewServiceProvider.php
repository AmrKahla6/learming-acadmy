<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Setting;
use App\SiteContent;

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
            $view->with('setting' , Setting::select('logo' , 'favicon')->first());
        });

        view()->composer('front.inc.footer' , function($view)
        {
            // $view->with('setting' , Setting::select('logo' , 'city' , 'adderess' , 'phone' , 'email')->first());
            $view->with('setting' , Setting::first());
            $view->with('news'    , SiteContent::select('content')->where('name' , 'news')->first());
            $view->with('footer'  , SiteContent::select('content')->where('name' , 'footer')->first());
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
