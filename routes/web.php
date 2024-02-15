<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchCourses;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\SubscriptionController;

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

Route::get('/search', SearchCourses::class)
    ->name('search');

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-post', [UserController::class, 'loginPost'])->name('users.login-post');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::resource('users', UserController::class);

Route::get('subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::post('subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
Route::get('subscribe2', [SubscriptionController::class, 'subscribe2'])->name('subscribe2');
Route::post('subscribe2', [SubscriptionController::class, 'subscribe2Store'])->name('subscribe2.store');
Route::get('checkout-success', [SubscriptionController::class, 'checkoutSuccess'])->name('checkout-success');
Route::get('checkout-cancel', [SubscriptionController::class, 'checkoutCancel'])->name('checkout-cancel');
Route::get('/billing', function (Request $request) {
    return $request->user()->redirectToBillingPortal(route('users.show', auth()->id()));
})->middleware(['auth'])->name('billing');