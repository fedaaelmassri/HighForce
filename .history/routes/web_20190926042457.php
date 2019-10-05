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










Route::get('/Home', 'frontend\HomeController@index')->name('home');

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/dashborde', function () {
    return view('backend.layouts.admin');
});



/* .... route news ....  */
Route::namespace('backend')->prefix('/admin/news')->group(function (){
    Route::get('/', 'NewsController@index')->name('admin.news');
    Route::get('/create','NewsController@create')->name('admin.news.create');
    Route::post('/store','NewsController@store')->name('admin.news.store');
});
/* .... end news route .... */

/* .... route services ....  */
Route::namespace('backend')->prefix('/admin/services')->group(function (){
    Route::get('/', 'NewsController@index')->name('admin.services');
    Route::get('/create','ServicesController@create')->name('admin.services.create');
    Route::post('/store','ServicesController@store')->name('admin.services.store');
});
/* .... end services route .... */
