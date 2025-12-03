<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;

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
    return view('landing');
})->name('landing');

Route::get('/userDashboard/{id}', [PostController::class, 'userPost'])->name('userDashboard');

Route::delete('/deletePost/{post}', [PostController::class, 'delete'])->name('posts.destroy');

// Route::get('/userDashboard', function () {
//     return view('userDashboard');
// })->name('userDashboard');



Route::get('/page', function () {
    return view('comment');
})->name('comment');


// serach

Route::get('/search', [PostController::class, 'search'])->name('search');


Route::get('/Home', [PostController::class, 'index'])->name('home');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/deleteComment/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/update/{post}', [PostController::class, 'update'])->name('posts.update');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [UsersController::class , 'indeDash']
    )->name('dashboard');

    Route::get('/Dash', [UsersController::class , 'indexDash']

    )->name('dash');

    Route::get('/userDash', [UsersController::class , 'index']
    )->name('users');

    Route::get('/productDash', PostController::class .'@indexDash')->name('products');

    Route::delete('/deleteUser/{id}', [UsersController::class , 'deleteUser'])->name('delete');


    // like
Route::post('/posts/{post}/like', [LikeController::class, 'toggle'])->name('posts.toggle-like');
});

// Route::get('/productDash', function(){
//     return view('productDash');
// })->name('products');



// Route::get('/productDash/{post}', PostController::class .'@show')->name('products');





