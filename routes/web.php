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

Auth::routes();

Route::get('/','HomeController@index');
Route::get('home','HomeController@index')->name('home');
Route::group(['middleware'=>'auth:web'],function(){
    Route::get('dashboard',function(){ 
        return view('admin.dashboard');
    })->name('dashboard');
Route::resources([
    'adminprofile'=>'ProfilesController',
    'car'=>'CarsController',
    'wallpaper'=>'WallpapersController',
    'footersetting'=>'FooterSettingController',
    'service'=>'ServicesController',
    ]);
});
Route::get('cars','FrontendController@Cars')->name('cars');
Route::get('services','FrontendController@services')->name('services');
