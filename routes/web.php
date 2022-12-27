<?php

use App\Http\Livewire\Admin\Index as AdminIndex;
use App\Http\Livewire\Admin\Product as AdminProduct;
use App\Http\Livewire\Admin\Report as AdminReport;
use App\Http\Livewire\Admin\Customer as AdminCustomer;
use App\Http\Livewire\Admin\User as AdminUser;
use App\Http\Livewire\Product\Index as ProductIndex;
use App\Http\Livewire\Index;
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

// Halaman Index
Route::get('/', Index::class)->name('index');

// Halaman Produk
Route::get('/product', ProductIndex::class)->name('product');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', AdminIndex::class)->name('dashboard');

    // Halaman Admin Product
    Route::get('/admin/product', AdminProduct::class)->name('admin.product');
    Route::get('/admin/product/create', AdminProduct::class)->name('admin.products.create');
    Route::post('/admin/product', AdminProduct::class)->name('admin.product.store');
    Route::get('/admin/product/{product}/edit', AdminProduct::class)->name('admin.product.edit');
    Route::put('/admin/product/{product}', AdminProduct::class)->name('admin.product.update');
    Route::delete('/admin/product/{product}', AdminProduct::class)->name('admin.product.destroy');


    // Admin Report
    Route::get('/admin/report', AdminReport::class)->name('admin.report');

    // Admin Customer
    Route::get('/admin/customer', AdminCustomer::class)->name('admin.customer');

    // Admin User
    Route::get('/admin/user', AdminUser::class)->name('admin.user');

    // Admin Product
});
