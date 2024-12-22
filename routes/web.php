<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFeedbackController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;
use App\Models\User; 
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\PurchaseController;

Route::get("/", function() {
    return view("welcome");
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/shop', action: function () {
    return view('shop');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified', 'isAdmin:admin'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/manage-stocks', [ShoeController::class, 'index'])->name('manage-stocks');
    Route::resource('shoes', ShoeController::class);
    Route::get('/manage-order', [OrderController::class, 'order'])->name('manage-order'); 
    Route::get('/admin/feedback-list', [AdminFeedbackController::class, 'index'])->name('feedback-list');
    Route::delete('/admin/feedback/{id}', [AdminFeedbackController::class, 'destroy'])->name('feedback.destroy');
});

Route::middleware(['isAdmin:user'])->group(function() {
    Route::get('/feedback', [FeedbackController::class, 'create'])->name(   'feedback.create');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
});

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/shoes/{shoe}/edit', [ShoeController::class,'edit'])->name('shoes.edit');
Route::put('/shoes/{shoe}', [ShoeController::class,'update'])->name('shoes.update');

Route::get('/purchase/create', [PurchaseController::class, 'create'])->name('purchase.create');
Route::get("/purchase/{id}", [PurchaseController::class, 'showPurchasePage'])->name('purchase.show');
Route::post('/purchase/store', [PurchaseController::class, 'store'])->name('purchase.store');
Route::get('/purchase/success', function () {
    return view('purchase.success');
})->name('purchase.success');