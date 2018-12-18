<?php

namespace App\Providers;
use Braintree_Configuration;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);

      \Braintree_Configuration::environment(config('services.braintree.environment'));
\Braintree_Configuration::merchantId(config('services.braintree.merchant_id'));
\Braintree_Configuration::publicKey(config('services.braintree.public_key'));
\Braintree_Configuration::privateKey(config('services.braintree.private_key'));


       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
