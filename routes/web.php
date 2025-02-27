<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Добавляем защищенную страницу
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/posts/create', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('posts.store');
Route::get('/posts/show/{post}', [PostController::class, 'show'])->middleware(['auth', 'verified'])->name('posts.show');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->middleware(['auth', 'verified'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware(['auth', 'verified'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('posts.destroy');

Route::get('/orders/order/{post}', [ordercontroller::class, 'index'])->middleware(['auth', 'verified'])->name('orders.order');
Route::post('/orders', [ordercontroller::class, 'store'])->middleware(['auth', 'verified'])->name('orders.store');
Route::get('/orders/order_show', [ordercontroller::class, 'show'])->middleware(['auth', 'verified'])->name('orders.order_show');
Route::get('/orders/order_show_id/{order}', [ordercontroller::class, 'show_id'])->middleware(['auth', 'verified'])->name('orders.order_show_id');
Route::put('/orders/update/{order}', [ordercontroller::class, 'update'])->middleware(['auth', 'verified'])->name('orders.update');
Route::get('/orders/edit/{order}', [ordercontroller::class, 'edit'])->middleware(['auth', 'verified'])->name('orders.edit');
Route::put('/orders/update_full/{order}', [ordercontroller::class, 'update_full'])->middleware(['auth', 'verified'])->name('orders.update_full');
Route::delete('/orders/delete/{order}', [ordercontroller::class, 'destroy'])->middleware(['auth', 'verified'])->name('orders.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';