<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', function(){
    return view('blog.home');
})->name('home');


Route::get('/posts', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('/about', function(){
    return view('blog.about');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);





// Using PHP callable syntax...
// Route::get('/users', [UserController::class, 'index']);

// Using string syntax...
// Route::get('/users', 'App\Http\Controllers\UserController@index');

