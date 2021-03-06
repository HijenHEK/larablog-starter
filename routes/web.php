<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotifController;
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

// Route::get('/', function () {
//     $container = new \App\Container ;

//     $container->bind('example' , function(){
//         return (new \App\Example);

//     });
//     $e = $container->resolve('example');
//     $e->display();



// });


use Laravel\Fortify\Fortify;

Fortify::verifyEmailView(function () {
    return view('auth.verify-email');
});
Fortify::loginView(function () {
    return view('auth.login');
});
Fortify::registerView(function () {
    return view('auth.register');
});
Fortify::resetPasswordView(function () {
    return view('auth.passwords.reset');
});
Fortify::confirmPasswordView(function () {
    return view('auth.passwords.confirm');
});
Fortify::requestPasswordResetLinkView(function () {
    return view('auth.passwords.email');
});


Route::get('/', [BlogController::class, 'index']);

Route::get('/user/{user}' , [BlogController::class, 'profile'])->name('profile');
// Route::get('/about', [BlogController::class, 'about']);
Route::get('/contact', [BlogController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create'])->middleware('can:create_post');

Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store'])->middleware('can:create_post');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');


Route::post('/notify' ,  [NotifController::class, 'store']);
Route::get('/notify' ,  [NotifController::class, 'index']);

Route::get('/dashboard/users',[UserController::class,'index'])->middleware('can:manage_users');
Route::get('/users/{user}',[UserController::class,'edit'])->middleware('can:manage_users');
Route::put('/users/{user}',[UserController::class,'update'])->middleware('can:manage_users');

// Using PHP callable syntax...
// Route::get('/users', [UserController::class, 'index']);

// Using string syntax...
// Route::get('/users', 'App\Http\Controllers\UserController@index');

