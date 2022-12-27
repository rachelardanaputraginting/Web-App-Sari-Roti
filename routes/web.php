<?php

use App\Http\Livewire\Admin\Index as AdminIndex;
use App\Http\Livewire\Product\Index as ProductIndex;
use App\Http\Livewire\Admin\Product\Index as AdminProductIndex;
use App\Http\Livewire\Admin\Product\Create as AdminProductCreate;
use App\Http\Livewire\Admin\Product\Edit as AdminProductEdit;
use App\Http\Livewire\Admin\Report\Index as AdminReportIndex;
use App\Http\Livewire\Admin\Order\Index as AdminOrderIndex;
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
    Route::get('/admin/product', AdminProductIndex::class)->name('admin.product');
    Route::get('/admin/product/create', AdminProductCreate::class)->name('admin.product.create');
    Route::get('/admin/product/{product}/edit', AdminProductEdit::class)->name('admin.product.edit');
    // Route::delete('/admin/product/{product}', AdminProductDestroy::class)->name('admin.product.destroy');


    // Admin Report
    Route::get('/admin/report/', AdminReportIndex::class)->name('admin.report');

    // Admin Order
    Route::get('/admin/order/', AdminOrderIndex::class)->name('admin.order');


    // // Admin Customer
    // Route::get('/admin/customer', AdminCustomer::class)->name('admin.customer');

    // // Admin User
    // Route::get('/admin/user', AdminUser::class)->name('admin.user');

    // Admin Product
});
