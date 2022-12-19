<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StoreController;
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

Route::group(['middleware' => 'auth'], function(){

    Route::resource('admin/stores', StoreController::class)->names([
        'index' => 'admin.stores.index',
        'show' => 'admin.stores.show',
        'create' => 'admin.stores.create',
        'store' => 'admin.stores.store',
        'edit' => 'admin.stores.edit',
        'update' => 'admin.stores.update',
        'destroy' => 'admin.stores.destroy',
    ]);
    
    Route::resource('admin/products', ProductController::class)->names([
        'index' => 'admin.products.index',
        'show' => 'admin.products.show',
        'create' => 'admin.products.create',
        'store' => 'admin.products.store',
        'edit' => 'admin.products.edit',
        'update' => 'admin.products.update',
        'destroy' => 'admin.products.destroy',
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
