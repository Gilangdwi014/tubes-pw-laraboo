<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/menu/{post:slug}', [PostController::class, 'show'])->middleware('auth');

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/bookmark', [BookmarkController::class, 'index'])->middleware('auth');
Route::post('/bookmark/{post:slug}', [BookmarkController::class, 'liker'])->middleware('auth');
Route::post('/bookmark/{post:slug}/hapus', [BookmarkController::class, 'disliker'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'active' => 'about',
    ]);
});

Route::post('/menu/{post:slug}', [PostController::class, 'insertFeedback'])->middleware('auth');
