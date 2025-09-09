<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
// use App\Http\Controllers\CommentController;


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

Route::delete('/delete/{post}', [PostController::class, 'delete'])->name('posts.destroy');

// Route::get('/userDashboard', function () {
//     return view('userDashboard');
// })->name('userDashboard');



Route::get('/page', function () {
    return view('comment');
})->name('comment');

Route::get('/Home', [PostController::class, 'index'])->name('home');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/delete/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::put('/update/{post}', [PostController::class, 'update'])->name('posts.update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/Dash', [UsersController::class , 'index'])->name('dash');

Route::get('/userDash', function(){
    return view('useDash');
})->name('users');

Route::get('/productDash', function(){
    return view('productDash');
})->name('products');


// Route::post('/commentAdd', CommentController::class . '@store')->name('comment.store');
