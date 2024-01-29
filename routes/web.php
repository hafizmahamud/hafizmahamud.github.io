<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PostCreate;
use App\Http\Controllers\PostController;
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

Route::view('/', 'home');

Route::get('/post/create', \App\Http\Livewire\PostCreate::class);
// Route::get('post/{slug}', \App\Http\Livewire\Post::class);

Route::get('/post/{slug}', [PostController::class, 'mount'])->name('post');
// Route::view('/{slug}', 'post');
Route::view('/blog', 'blog');
Route::view('/resume', 'resume');
Route::view('/portfolio', 'portfolio');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
