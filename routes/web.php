<?php

use App\Http\Livewire\LwJob;
use App\Http\Livewire\LwLog;
use App\Http\Livewire\LwUser;
use App\Http\Livewire\LwOffice;
use App\Http\Livewire\LwJobType;
use App\Http\Livewire\LwLicense;
use App\Http\Livewire\LwEmployee;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LwLicenseAuthorize;
use App\Http\Controllers\ProfileController;

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

//carnet público
Route::get('/card/{id}', function (string $id) {
    return view('card')->with("id",$id);;
})->middleware(['cors'])->name('card');

//qr público
Route::get('/qr/{id}', function (string $id) {
    return view('qr')->with("id",$id);;
})->middleware(['cors'])->name('qr');



Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified','cors','auth.role:1|2'])->name('dashboard');






Route::middleware('auth', 'verified','cors')->group(function () {

    Route::get('/menu_sistema', function () {return view('menu_sistema'); })->middleware('auth.role:1')->name('menu_sistema');
    Route::get('/menu_administracion', function () {return view('menu_administracion'); })->name('menu_administracion');
    Route::get('/menu_rrhh', function () {return view('menu_rrhh'); })->name('menu_rrhh');

    Route::get('/log', LwLog::class)->name('log');
    Route::get('/user', LwUser::class)->name('user');
    Route::get('/office', LwOffice::class)->name('office');
    Route::get('/employee', LwEmployee::class)->name('employee');
    Route::get('/job', LwJob::class)->name('job');
    Route::get('/jobType', LwJobType::class)->name('jobType');
    Route::get('/license', LwLicense::class)->name('license');
   // Route::get('/license_authorize', LwLicenseAuthorize::class)->name('license_authorize');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
