<?php

use App\Livewire\Counter;
use App\Livewire\HomePage;
use App\Livewire\Login;
use App\Livewire\Todo;
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

Route::get('/', HomePage::class)->name('home.view');
Route::get('/counter', Counter::class)->name('counter.view');
Route::get('/login/{email}/{password}/{mobile?}', Login::class)->name('login.view');
Route::get('/to-do', Todo::class)->name('todo.view');
