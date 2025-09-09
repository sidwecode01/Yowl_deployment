<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController; 
// use App\Http\Controllers\postController;


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

Route::get('/Home', [PostController::class, 'index'])->name('home');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

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

// Route::get('/productDash', function(){
//     return view('productDash');
// })->name('products');

Route::get('/productDash', PostController::class .'@index')->name('products');

// Route::get('/productDash/{post}', PostController::class .'@show')->name('products');
