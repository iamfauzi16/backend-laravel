<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DashboardProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details/{id}', 'DetailsController@index')->name('detail');

Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-product');

Route::get('/dashboard/products/create', 'DashboardProductController@dashboardCreate')->name('dashboard-create');
Route::get('/dashboard/products/{id}', 'DashboardProductController@dashboardDetail' )->name('dashboard-products-details');

Route::get('/dashboard/transaction', 'TransactionController@index')->name('transaction');
Route::get('/dashboard/transaction/{id}', 'TransactionController@transactionDetails')->name('transaction-details');

Route::get('/dashboard/accounts', 'DashboardSettingController@index')->name('dashboard-accounts');
Route::get('/dashboard/settings', 'DashboardSettingController@dashboardSetting')->name('dashboard-settings');

// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
});

Auth::routes();



