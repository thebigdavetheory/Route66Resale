<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('deals');
});
Route::get('/deals', function () {
    return view('deals');
});


Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/products', [ProductsController::class, 'products']);

Route::get('/admin/products/create', [ProductsController::class, 'getCreateProductView']);
Route::post('/admin/products/create', [ProductsController::class, 'createProduct']);

Route::get('/admin/products/edit', [ProductsController::class, 'editProduct']);
Route::post('/admin/products/edit', [ProductsController::class, 'editProduct']);

Route::post('/admin/products/delete', [ProductsController::class, 'deleteProduct']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
