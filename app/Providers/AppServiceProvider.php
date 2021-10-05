<?php

namespace App\Providers;
use Illuminate\Support\Str;

use Illuminate\Support\ServiceProvider;

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
        Str::macro('currency', function($amount, $flag){
            $fmt = new \NumberFormatter( 'pt_BR', \NumberFormatter::CURRENCY);
            return numfmt_format_currency($fmt, $amount, $flag);
        });
    }
}
