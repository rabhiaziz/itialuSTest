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

Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {
    Route::get('/', 'index')->name('sign-in');
    Route::get('/register', 'register')->name('register');
});

Route::controller(\App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
});

Route::controller(\App\Http\Controllers\NoteController::class)->group(function () {
    Route::get('/my-notes', 'index')->name('my-notes');
    Route::get('/create-note', 'create')->name('create-note');
    Route::post('/store-note', 'store')->name('store-note');
    Route::get('/show-note/{id}', 'show')->name('show-note');
    Route::delete('/delete-note/{id}', 'destroy')->name('delete-note');
});
