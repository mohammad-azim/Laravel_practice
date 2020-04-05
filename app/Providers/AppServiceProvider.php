<?php

namespace App\Providers;
use App\Chanel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::DefaultStringLength(191);

         //  view composer... we can attach data to every single view.

        // option 1: Every single view

        // View::share('chanels', Chanel::orderBy('name')->get());

        // option 2: Granular views with wildcards

        View::composer(['chanel.index','post.create'], function($view){
            $view->with('chanels', Chanel::orderBy('name')->get());
        });

        // option 3:‌ Dedicated class

        // View::composer(['post.*', 'chanel.index'], ChanelComposer::class);
    }
}
