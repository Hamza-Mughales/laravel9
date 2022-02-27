<?php

use App\Http\Controllers\postController;
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



Route::get('/', function () {
    throw new Exception('Whoops');
    
    return str('Hello World');
    // return view('welcome');
});

Route::controller(postController::class)->group(function ()
{
    Route::get('/posts',  'index');
    Route::get('/posts/{post}',  'show');
    Route::post('/posts',  'store');
});



// Laravel 8  {post:id}
Route::get('/posts/{user}/posts/{post:id}', function () {});


// Laravel 9 scopeBindings()
Route::get('/posts/{user}/posts/{post}', function () {
    return ('Hello World');
})->scopeBindings();