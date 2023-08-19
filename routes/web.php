<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('products.index');
});

Route::get('/', [productcontroller::class, 'index'])->name('product.index');
Route::get('/product/create', [productcontroller::class, 'create'])->name('product.create');
Route::post('/', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/{product}/view', [ProductController::class, 'view'])->name('product.view');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');