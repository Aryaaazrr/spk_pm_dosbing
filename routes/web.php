<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AspekController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileMatchingController;
use App\Http\Controllers\ProfileMethodController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\SubmissionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'] )->name('dashboard.index');

    Route::resource('aspek', AspekController::class);
    Route::resource('kriteria', KriteriaController::class);
    Route::resource('subkriteria', SubkriteriaController::class);
    Route::resource('alternatif', AlternatifController::class);
    Route::resource('method-profile', ProfileMethodController::class);
    Route::resource('mahasiswa', MahasiswaController::class);

    Route::resource('submissions', SubmissionsController::class);

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';