<?php

use App\Http\Controllers\Dashboard\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
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
    ], function(){
        Route::group(['middleware' => 'auth:admin','namespace'=>'Dashboard','prefix'=>'admin'], function () {
            Route::get('/','DashboardController@index')->name('admin.dashboard');
            Route::get('logout', 'DashboardController@logt')->name('admin.logout');
            Route::group(['prefix' => 'settings'], function () {
                Route::get('shipping-methods/{type}', 'SettingsController@editshipping')->name('edit.shipping.method');
                Route::put('shipping-methods/{id}', 'SettingsController@updateshipping')->name('update.shipping.method');
            });


        });
        Route::group(['namespace'=>'Dashboard','middleware' => 'guest:admin','prefix'=>'admin'], function () {
                Route::get('/login','LoginController@login')
                ->name('admin.login');
                Route::post('/login','LoginController@postLogin')
                ->name('admin.postLogin');

        });

    });



