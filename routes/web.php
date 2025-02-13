<?php

use App\Livewire\AdminPage;
use App\Livewire\CrudDay2;
use App\Livewire\UserPage;
use App\Models\Data_info;

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

Route::view('/', 'welcome');
Route::get('/crud',CrudDay2::class);
Route::get('/admin',AdminPage::class)->middleware('admin');

Route::get('/user',UserPage::class);


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';