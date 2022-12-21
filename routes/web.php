<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicsController;
use App\Http\Controllers\Guest\PageController;


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

Route::get('characters',[ PageController::class, 'characters'])->name('characters');

Route::get('/',[ PageController::class, 'home'])->name('home');

Route::resource('comics', ComicsController::class);

Route::get('movies',[ PageController::class, 'movies'])->name('movies');

Route::get('tv',[ PageController::class, 'tv'])->name('tv');


Route::get('games',[ PageController::class, 'games'])->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
