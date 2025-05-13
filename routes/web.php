<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Winkelwagen
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

// Afrekenen
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [OrderController::class, 'placeOrder'])->name('checkout.place');

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/festivals', [AdminController::class, 'viewFestivals'])->name('admin.festivals.index');
Route::get('/admin/festivals/create', [AdminController::class, 'createFestival'])->name('admin.festivals.create');
Route::post('/admin/festivals/store', [AdminController::class, 'storeFestival'])->name('admin.festivals.store');
Route::get('/admin/festivals/{id}/edit', [AdminController::class, 'editFestival'])->name('admin.festivals.edit');
Route::put('/admin/festivals/{id}', [AdminController::class, 'updateFestival'])->name('admin.festivals.update');
Route::delete('/admin/festivals/{id}', [AdminController::class, 'deleteFestival'])->name('admin.festivals.delete');

// Admin Panel - Bestellingen Beheren
Route::get('/admin/orders', [AdminController::class, 'viewOrders'])->name('admin.orders.index');
Route::get('/admin/orders/{id}', [AdminController::class, 'viewOrderDetails'])->name('admin.orders.show');
Route::delete('/admin/orders/{id}', [AdminController::class, 'deleteOrder'])->name('admin.orders.delete');
