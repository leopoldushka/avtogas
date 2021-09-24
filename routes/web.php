<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;

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
    return view('start');
});
Route::get('/reg', function () {
    return view('document.reg');
});
Route::get('/about', function () {
    return view('document.about');
});
Route::get('/station', function () {
    return view('document.gasstation');
});
Route::resource('/product', ProductController::class);
Route::get('/bids', function () {
    return view('bids.bid');
});
Route::get('/calc', [ProductController::class, 'calc_input']);
Route::post('/message_create', [MessageController::class, 'create'])->name('message_create');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
