<?php

use App\Http\Controllers\Web\OrdersController;
use App\Http\Controllers\Web\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
Route::post('/orders/{id}', [OrdersController::class, 'assign'])->name('orders.assign');
Route::prefix('/stores')->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('stores.index');
    Route::get('/create', [StoreController::class, 'create'])->name('stores.create');
    Route::post('/', [StoreController::class, 'store'])->name('stores.store');
    Route::get('/{id}', [StoreController::class, 'edit'])->name('stores.edit');
    Route::put('/{id}', [StoreController::class, 'update'])->name('stores.update');
    Route::delete('/{id}', [StoreController::class, 'destroy'])->name('stores.destroy');
});
