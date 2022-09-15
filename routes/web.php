<?php

use App\Http\Controllers\LoginController;
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

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/email-verify/{token}', VerifyEmailController::class)->name('verify.email'); // special use controller used for single action

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

// Route::get('/signup', [RegisterController::class, 'showRegister']);

// Route::post('/signup', [RegisterController::class, 'submitRegisterForm'])->name('post.register');

// // demo endpoint to create a post
// Route::get('/posts', function () {
//     // insert multiple records
//     $data = [
//         [
//             'title' => 'some title 1',
//             'content' => 'some new content for new post1',
//         ],
//         [
//             'title' => 'some title2',
//             'content' => 'some new content for new post2',
//         ],
//     ];
    
//     Post::insert($data);
        
//     return "Post created successfully";
    

//     // $data = [
//     //     'title' => 'some title',
//     //     'content' => 'some new content for new post',
//     // ];

//     // Post::create($data);
//     // return "Post created successfully";


//     // // create a new object for your model
//     // $post = new Post();

//     // // set the attribute for the model.
//     // $post->title = "This is a title for my post";
//     // $post->content = "This is dummy content";

//     // $post->save();

    
// });


