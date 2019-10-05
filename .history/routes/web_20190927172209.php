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
    Route::post('/delete', 'NewsController@delete')->name('admin.news.delete');
    Route::get('/edit/{id}', 'NewsController@editNews')->name('admin.news.edit');
    Route::put('{id}', 'NewsController@updateNews')->name('admin.news.update');

});
/* .... end news route .... */

/* .... route posts ....  */
Route::namespace('backend')->prefix('/admin/posts')->group(function (){
    Route::get('/', 'PostsController@index')->name('admin.posts');
    Route::get('/create','PostsController@create')->name('admin.posts.create');
    Route::post('/store','PostsController@store')->name('admin.posts.store');
});
/* .... end posts route .... */

/* .... route services ....  */
Route::namespace('backend')->prefix('/admin/services')->group(function (){
    Route::get('/', 'ServicesController@index')->name('admin.services');
    Route::get('/create','ServicesController@create')->name('admin.services.create');
    Route::post('/store','ServicesController@store')->name('admin.services.store');
});
/* .... end services route .... */

/* .... route brands ....  */
Route::namespace('backend')->prefix('/admin/brands')->group(function (){
    Route::get('/', 'BrandsController@index')->name('admin.brands');
    Route::get('/create','BrandsController@create')->name('admin.brands.create');
    Route::post('/store','BrandsController@store')->name('admin.brands.store');
});
/* .... end brands route .... */

/* .... route catalogues ....  */
Route::namespace('backend')->prefix('/admin/ecatalogues')->group(function (){
    Route::get('/', 'EcataloguesController@index')->name('admin.ecatalogues');
    Route::get('/create','EcataloguesController@create')->name('admin.ecatalogues.create');
    Route::post('/store','EcataloguesController@store')->name('admin.ecatalogues.store');
});
/* .... end catalogues route .... */

/* .... route aboutus ....  */
Route::namespace('backend')->prefix('/admin/aboutus')->group(function (){
    Route::get('/create','EcataloguesController@create')->name('admin.aboutus');
    Route::post('/store','EcataloguesController@store')->name('admin.aboutus.store');
});
/* .... end aboutus route .... */
