<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', 'MainController@welcome')->name('main');
        Route::get('/blog/{slug}', 'MainController@showPost')->name('post.show');
        Route::get('/blog/', 'MainController@blogIndex')->name('post.index');
        Route::get('/about/', 'MainController@aboutUs')->name('about');
        Route::get('/page/{slug}', 'MainController@showPage')->name('page.show');
        Route::get('/products', 'MainController@showProducts')->name('product.index');
        Route::get('/contacts', 'MainController@contacts')->name('contacts');
        Route::get('/career', 'MainController@career')->name('careers');
        Route::get('/privacy-policy', 'MainController@privacy')->name('privacy');
        Route::post('/', 'MainController@store')->name('store');

    });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
