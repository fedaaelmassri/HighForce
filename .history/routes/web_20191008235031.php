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









/* .... Start Front end ...*/


Route::get('/Home', 'frontend\HomeController@index')->name('home');

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/service/{id}', function () {
    return view('frontend.service-details');
})->name('service-details');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/post/{id}', function () {
    return view('frontend.post-details');
})->name('post-details');



/* .... end Front end ...*/

/* .... Dashboard .... */
Route::get('/dashborde', 'backend\HomeController@index')->middleware(['auth']);

/* .... route news ....  */
Route::namespace('backend')->prefix('/admin/news')->middleware(['auth'])->group(function (){
    Route::get('/', 'NewsController@index')->name('admin.news');
    Route::get('/create','NewsController@create')->name('admin.news.create');
    Route::post('/store','NewsController@store')->name('admin.news.store');
    Route::get('/delete/{id}', 'NewsController@delete')->name('admin.news.delete');
    Route::get('/edit/{id}', 'NewsController@editNews')->name('admin.news.edit');
    Route::put('{id}', 'NewsController@updateNews')->name('admin.news.update');

});
/* .... end news route .... */

/* .... route posts ....  */
Route::namespace('backend')->prefix('/admin/posts')->middleware(['auth'])->group(function (){
    Route::get('/', 'PostsController@index')->name('admin.posts');
    Route::get('/create','PostsController@create')->name('admin.posts.create');
    Route::post('/store','PostsController@store')->name('admin.posts.store');
    Route::get('/delete/{id}', 'PostsController@delete')->name('admin.posts.delete');
    Route::get('/edit/{id}', 'PostsController@editPost')->name('admin.posts.edit');
    Route::put('{id}', 'PostsController@updatePost')->name('admin.posts.update');

});
/* .... end posts route .... */

/* .... route services ....  */
Route::namespace('backend')->prefix('/admin/services')->middleware(['auth'])->group(function (){
    Route::get('/', 'ServicesController@index')->name('admin.services');
    Route::get('/create','ServicesController@create')->name('admin.services.create');
    Route::post('/store','ServicesController@store')->name('admin.services.store');
    Route::get('/delete/{id}', 'ServicesController@delete')->name('admin.services.delete');
    Route::get('/edit/{id}', 'ServicesController@editService')->name('admin.services.edit');
    Route::put('{id}', 'ServicesController@updateService')->name('admin.services.update');
});
/* .... end services route .... */

/* .... route brands ....  */
Route::namespace('backend')->prefix('/admin/brands')->middleware(['auth'])->group(function (){
    Route::get('/', 'BrandsController@index')->name('admin.brands');
    Route::get('/create','BrandsController@create')->name('admin.brands.create');
    Route::post('/store','BrandsController@store')->name('admin.brands.store');
    Route::get('/delete/{id}', 'BrandsController@delete')->name('admin.brands.delete');
    Route::get('/edit/{id}', 'BrandsController@editBrand')->name('admin.brands.edit');
    Route::put('{id}', 'BrandsController@updateBrand')->name('admin.brands.update');
});
/* .... end brands route .... */

/* .... route Products ....  */
Route::namespace('backend')->prefix('/admin/products')->middleware(['auth'])->group(function (){
    Route::get('/', 'ProductsController@index')->name('admin.products');
    Route::get('/create','ProductsController@create')->name('admin.products.create');
    Route::post('/store','ProductsController@store')->name('admin.products.store');
    Route::get('/getSupCat/{id}', 'ProductsController@getSupCat')->name('admin.products.getSupCat');
    Route::get('/delete/{id}', 'ProductsController@delete')->name('admin.products.delete');
    Route::get('/edit/{id}', 'ProductsController@editProduct')->name('admin.products.edit');
    Route::put('{id}', 'ProductsController@updateProduct')->name('admin.products.update');
});
/* .... end Products route .... */

/* .... route catalogues ....  */
Route::namespace('backend')->prefix('/admin/ecatalogues')->middleware(['auth'])->group(function (){
    Route::get('/', 'EcataloguesController@index')->name('admin.ecatalogues');
    Route::get('/create','EcataloguesController@create')->name('admin.ecatalogues.create');
    Route::post('/store','EcataloguesController@store')->name('admin.ecatalogues.store');
    Route::get('/delete/{id}', 'EcataloguesController@delete')->name('admin.ecatalogues.delete');
    Route::get('/edit/{id}', 'EcataloguesController@editCatalogue')->name('admin.ecatalogues.edit');
    Route::put('{id}', 'EcataloguesController@updateCatalogue')->name('admin.ecatalogues.update');
});
/* .... end catalogues route .... */

/* .... route aboutus ....  */
Route::namespace('backend')->prefix('/admin/aboutus')->middleware(['auth'])->group(function (){
    Route::get('/create','EcataloguesController@create')->name('admin.aboutus');
    Route::post('/store','EcataloguesController@store')->name('admin.aboutus.store');
});
/* .... end aboutus route .... */

/* .... route category ....  */
Route::namespace('backend')->prefix('/admin/category')->middleware(['auth'])->group(function (){
    Route::get('/', 'CategoryController@index')->name('admin.category');
    Route::get('/create','CategoryController@create')->name('admin.category.create');
    Route::post('/store','CategoryController@store')->name('admin.category.store');
    Route::get('/delete/{id}', 'CategoryController@editparentCat')->name('admin.category.delete');
    Route::get('/edit/{id}', 'CategoryController@editCategory')->name('admin.category.edit');
    Route::put('{id}', 'CategoryController@updateCategory')->name('admin.category.update');

});
/* .... end category route .... */


  // ******************** Auth route For Admin **********************************
  Route::group(['prefix' => 'admin'], function() {
    Auth::routes();

    //Auth::routes(['verify' => true]);

    Route::get('logout', function () {
        Auth::logout();
        return redirect('login');
    })->name('admin.logout');

});



// Auth::routes();



// Auth::routes();
// Auth::routes(['verify' => true]);
// Route::get('/admin/logout', function () {
//     Auth::logout();
//     return redirect('/login');
// })->name('admin.logout');


/* .... End Dashboard ... */

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
