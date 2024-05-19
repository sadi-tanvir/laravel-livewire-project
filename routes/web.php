<?php

use App\Livewire\ServiceDetails;
use App\Livewire\ShowHome;
use App\Livewire\ShowServices;
use App\Livewire\ShowTeamPage;
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

Route::get('/', ShowHome::class)->name('home.view');
Route::get('/services', ShowServices::class)->name('services.view');
Route::get('/service/{id}', ServiceDetails::class)->name('service.details');
Route::get('/team', ShowTeamPage::class)->name('team.view');
