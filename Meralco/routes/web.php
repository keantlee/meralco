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

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/dashboard', 'ClientAddressController@dashboard')->name('view_dashboard');
Route::get('/site_datalog', 'ClientAddressController@getSiteData')->name('get_site_data');
Route::get('/site_01_datalog', 'ClientAddressController@site01')->name('site_01');
Route::get('/site_02_datalog', 'ClientAddressController@site02')->name('site_02');