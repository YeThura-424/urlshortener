<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortenController;
use AshAllenDesign\ShortURL\Http\Controllers\ShortURLController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::get('/',[App\Http\Controllers\FrontendController::class,'index'])->name("index");
// Route::resource('/shorten',[App\Http\Controllers\ShortenController::class]);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/shorten', 'App\Http\Controllers\ShortenController');
    
});

Route::get('/custom/{shortURLKey}', '\AshAllenDesign\ShortURL\Controllers\ShortURLController');



Route::get('/short/{code}', [ShortURLController::class, 'redirectToOriginalUrl'])->name('short-url');