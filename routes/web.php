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





Route::get('/posts', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);

Route::get('/about', function(){
    return view('blog.about');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);





// Using PHP callable syntax...
// Route::get('/users', [UserController::class, 'index']);

// Using string syntax...
// Route::get('/users', 'App\Http\Controllers\UserController@index');

