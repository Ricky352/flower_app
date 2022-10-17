<?php

use App\Http\Controllers\FlowerController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::check())
        return view('dashboard');
    else
        return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/flowers', [FlowerController::class, 'index']);
// Insert :
Route::get('/flowers/insert', [FlowerController::class, 'create']);
Route::post('/flowers/insert', [FlowerController::class, 'store'])->middleware('islogin');

// Update : 

Route::get('/flowers/update/{id}', [FlowerController::class, 'edit']);
Route::put('/flowers/update/{id}', [FlowerController::class, 'update'])->middleware('islogin');

// Delete :
Route::get('/flowers/delete/{id}', [FlowerController::class, 'destroy'])->middleware('islogin');

// Find :
Route::get('/flower/{id}', [FlowerController::class, 'show']);


Route::get('/comments', [CommentController::class, 'index']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/account', function () {
    if (Auth::check())
    return view('account');
    else
    return view('home');
});

// route::get("/login", [FlowerController::class, 'viewlogin']);
// route::post("/login", [FlowerController::class, 'login']);

// route::get("/logout", [FlowerController::class, 'viewlogout']);
// route::post("/logout", [FlowerController::class, 'logout']);
