<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

Route::middleware('auth')->group(function () {
    Route::post('/products/{product}/review', [ReviewController::class, 'store'])->name('products.review');
    Route::post('/toggle-dark-mode', function () {
        session(['dark_mode' => !session('dark_mode', false)]);
        return back();
    })->name('toggle.darkmode');
});

Auth::routes();
