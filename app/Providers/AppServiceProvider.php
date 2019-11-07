<?php

namespace App\Providers;

use App\maxins\StrMixins;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        Str::macro('partNumber', function ($part){
            return 'AB-'.substr($part, 0, 3).' '.substr($part, 3);
        });

        Str::mixin(new StrMixins(), false); // (parameter single parameter with out any boolean or true for override method) or false for ignore override method

        ResponseFactory::macro('errorJson', function ($message='Default error message'){
            return [
              'message' => $message,
              'error_code' => 123
            ];
        });
    }
}
