<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\ListPostController;
use App\Http\Controllers\Posts\ShowPostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerifyEmailController;
use App\Models\Post;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', ListPostController::class);
Route::get('/posts/show/{post}', ShowPostController::class)->name('show.post');

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/email-verify/{token}', VerifyEmailController::class)->name('verify.email'); // special use controller used for single action

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

// edit post

Route::get('/posts/edit/{post}',[PostsController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}',[PostsController::class, 'update'])->name('posts.update');


