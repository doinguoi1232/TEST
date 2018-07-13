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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/categories', 'CategoriesController@index')->name('indexCategories');
Route::get('/create/categories', 'CategoriesController@create')->name('getCategories');
Route::post('/create/categories', 'CategoriesController@store')->name('postCategories');
Route::get('/edit/categories/{id}', 'CategoriesController@edit')->name('editCategories');
Route::get('/delete/categories/{id}', 'CategoriesController@destroy')->name('delteCategories');
Route::post('/edit/categories/{id}', 'CategoriesController@editStore')->name('editStoreCategories');
Route::get('/show/categories/{id}', 'CategoriesController@show')->name('showCategories');
Route::get('/products', 'ProductsController@index')->name('indexProducts');
Route::get('/create/products', 'ProductsController@create')->name('getProducts');
Route::post('/create/products', 'ProductsController@store')->name('postProducts');
Route::get('/create/order', 'OrderController@create')->name('getOrder');
Route::post('/create/order', 'OrderController@store')->name('postOrder');
Route::get('/order', 'OrderController@index')->name('indexOreder');
Route::get('/orderever', 'OrderController@indexEvery')->name('indexEveryOreder');
Route::get('/danhthu', 'OrderController@listDanhthu')->name('listDanhthu');
Route::get('/danhthuthang', 'OrderController@listDanhthuThang')->name('listDanhThuThang');
Route::get('/danhthunam', 'OrderController@listDanhthunam')->name('listDanhThuNam');
Route::get('/order/{id}', 'OrderController@show')->name('OrederShow');
Route::get('/store', 'StoreController@index')->name('StoreIndex');
Route::get('/create/order_detai/store/{id}', 'OrderController@createOrderDetail')->name('getOrderDetailStrore');
Route::post('/create/order_detai/store', 'OrderController@storeOrderDetail')->name('postOrderDetailStrore');


Route::get('/productsgiaban', 'productsgiabanController@index')->name('indexProductsgiaban');
Route::get('/create/productsgiaban', 'productsgiabanController@create')->name('getProductsgiaban');
Route::post('/create/productsgiaban', 'productsgiabanController@store')->name('postProductsgiaban');
Route::get('/edit/productsgiaban/{id}', 'productsgiabanController@edit')->name('editProductsgiaban');
Route::post('/edit/productsgiaban/{id}', 'productsgiabanController@editStore')->name('editStoreProductsgiaban');
Route::get('/delete/productsgiaban/{id}', 'productsgiabanController@destroy')->name('delteProductsgiaban');

