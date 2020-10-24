<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/about', function(){
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});



use App\Http\Controllers\UserController;

// Using PHP callable syntax...
// Route::get('/users', [UserController::class, 'index']);

// Using string syntax...
// Route::get('/users', 'App\Http\Controllers\UserController@index');

