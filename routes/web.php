<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile', [ProfileController::class, 'role'])->name('role.update');

});
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard.admin');

    Route::get('/admin/users', 'AdminController@users')->name('users.list');
});

Route::group(['middleware' => ['role:fisio']], function () {
    Route::get('/fisio/dashboard', [FisioController::class, 'index'])->name('dashboard.fisio');

    Route::get('/fisio/patients', 'FisioController@patients')->name('patients.list');
});
Route::group(['middleware' => ['role:patient']], function () {
    Route::get('/patient/dashboard', [patientController::class, 'index'])->name('dashboard.patient');

    Rout
});
require __DIR__.'/auth.php';
