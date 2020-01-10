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

Route::get('/dashboard', 'dashboardController@showMap')->name('view_dashboard_map');
Route::get('/dashboard/{name?}', 'dashboardController@autocomplete')->name('autocomplete.fetch');
Route::get('/dashboard/site_datalog/{id}', 'dashboardController@showSiteLog')->name('view_site_log');

//Resources
// Route::resource('/site_datalog', 'APIController');
