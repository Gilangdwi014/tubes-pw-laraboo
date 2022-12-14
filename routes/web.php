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

Route::get('/', function () {
    return view('menu', [
        "active" => 'home'
    ]);
});

Route::get('/login', function () {
    return view('login.index');
});
Route::get('/register', function () {
    return view('register.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/posts', function () {
    return view('dashboard.posts.create');
});

Route::get('/detmenu', function () {
    return view('detmenu', [
        "active" => 'home'
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        "active" => 'categories'
    ]);
});

Route::get('/pengguna', function () {
    return view('pengguna', [
        "active" => 'home'
    ]);
});
