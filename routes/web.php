<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('sessions', [SessionController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');

Route::post('posts/{post:slug}/comments', [CommentController::class, 'store']);

Route::get('admin/posts/', [AdminPostController::class, 'create'])->middleware('admin');
Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');

Route::post('admin/posts', [PostController::class, 'store'])->middleware('admin');



// alias do skrótów alias $skrót = "$komenda"
// Na controllerze najlepiej używać nazw : /index, show, create, store, edit, update, destroy 
//Middlesware zasady dostępu to konkretnej ściezki 