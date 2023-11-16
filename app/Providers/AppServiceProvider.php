<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\productType;

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
        view()->composer('header',function($view){
            $loai_sp =productType::all();
            $view->with('loai_sp',$loai_sp);
        });
    }
}
