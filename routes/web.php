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
    return view('index');
});

Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function () {
    //Dashboard Route
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    });

    // Route::resource('dashboard', 'dashboardController');
    //EShop Data Entry Routes
    Route::resource('brands', 'EShopDataEntry\BrandsController');
    Route::resource('categories', 'EShopDataEntry\categoriesController');
    Route::resource('products', 'EShopDataEntry\ProductsController');

    //EShop Transactions Routes
    Route::resource('customers', 'EShopTransactions\CustomersController');
    Route::resource('orders', 'EShopTransactions\OrdersController');
    Route::resource('product-sales', 'EShopTransactions\ProductSalesController');

    //Frontend Data Entry Routes
    Route::resource('blog-posts', 'FrontendDataEntry\BlogPostsController');
    Route::resource('pages', 'FrontendDataEntry\PagesController');

    //System
    Route::resource('system-users', 'System\UsersController');

    Route::resource('database-backup', 'System\SystemController@dbbackup');
    Route::resource('csv-export', 'System\SystemController@csvexport');
    Route::resource('csv-import', 'System\SystemController@csvimport');
});
