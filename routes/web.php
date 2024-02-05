<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchCourses;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/search', SiteSearch::class)
//     ->name('search');
