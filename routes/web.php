<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\MailController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');

Route::get('/review', [ReviewController::class, 'index']);
Route::post('/review', [ReviewController::class, 'review_check']);

Route::get('/receipt', [ReceiptController::class, 'index']);
Route::post('/receipt', [ReceiptController::class, 'save']);

Route::get('/', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'admin'])->middleware('auth')->name('admin');
Route::post('/admin', [AdminController::class, '']);

Route::get('/login', function(){
    if (Auth::check()) {return redirect(route('admin'));}
    return(view('login'));
})->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/register', function(){
    if (Auth::check()) {
        return redirect(route('admin'));
    }
    return(view('register'));
});
Route::post('/register', [AdminController::class, 'register']);