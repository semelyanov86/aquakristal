<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'laravellocalization.supportedLocales' => [
                'az' => array( 'name' => 'Azerbaijan', 'script' => 'Latn', 'native' => 'azərbaycanca' ),
                'ru'  => array( 'name' => 'Russian', 'script' => 'Cyrl', 'native' => 'Русский' ),
                'en'  => array( 'name' => 'English', 'script' => 'Latn', 'native' => 'English' ),
            ],

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);
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
