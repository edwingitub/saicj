<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LwUser;
use App\Http\Livewire\LwOffice;

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

Route::get('/', function () {
    return view('auth/login');
});



Route::get('/dashboard', function () {
    return view('dashboard');
   
})->middleware(['auth', 'verified','cors'])->name('dashboard');




Route::middleware('auth', 'verified','cors')->group(function () {

    Route::get('/menu_sistema', function () {return view('menu_sistema'); })->name('menu_sistema');
    Route::get('/menu_administracion', function () {return view('menu_administracion'); })->name('menu_administracion');

    Route::get('/user', LwUser::class)->name('user');
    Route::get('/office', LwOffice::class)->name('office');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
