<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\SocialMediaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('management', ManagementController::class);
Route::resource('books', BookController::class);
Route::resource('contact', ContactController::class);
Route::resource('about', AboutController::class);
Route::resource('help', HelpController::class);
Route::resource('customers', CustomerController::class);
Route::resource('bookdetail', BookDetailController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
