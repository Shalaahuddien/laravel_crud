<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::resource('posts', PostController::class);
Route::get('/', [PostController::class, 'destroy']);
// Route::post('/', [PostController::class, 'show']);
// Route::post('/', [PostController::class, 'destroy']);
// Route::delete('/', [PostController::class, 'destroy']);

// Route::get('/', 'UploadController@hapus');

// Route::get('/', 'PostController@destroy');

// Route::resource('posts', PostController::class)->names([
//     'index' => 'posts',
//     'show' => 'posts.show',
//     'create' => 'posts.create',
//     'store' => 'posts.store',
//     'edit' => 'posts.edit',
//     'update' => 'posts.update',
//     'destroy' => 'posts.destroy',
// ]);


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
//     return view('welcome');
// });
