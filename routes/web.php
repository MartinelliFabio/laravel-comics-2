<?php

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

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/', function () {
    $comics = config('db_seeder.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/single-page0', function () {
    $comics = config('db_seeder.comics.0');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page1', function () {
    $comics = config('db_seeder.comics.1');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page2', function () {
    $comics = config('db_seeder.comics.2');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page3', function () {
    $comics = config('db_seeder.comics.3');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page4', function () {
    $comics = config('db_seeder.comics.4');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page5', function () {
    $comics = config('db_seeder.comics.5');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page6', function () {
    $comics = config('db_seeder.comics.6');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page7', function () {
    $comics = config('db_seeder.comics.7');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page8', function () {
    $comics = config('db_seeder.comics.8');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page9', function () {
    $comics = config('db_seeder.comics.9');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page10', function () {
    $comics = config('db_seeder.comics.10');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page11', function () {
    $comics = config('db_seeder.comics.11');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page12', function () {
    $comics = config('db_seeder.comics.12');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

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
