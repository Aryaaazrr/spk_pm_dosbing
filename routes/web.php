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
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('pendahuluan', function () {
    return view('pages.home.pendahuluan');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'] )->name('dashboard.index');

    Route::resource('aspek', AspekController::class);

    Route::prefix('kriteria')->name('kriteria.')->group(function () {
        Route::resource('/', KriteriaController::class)->parameters(['' => 'kriteria']);

        Route::resource('/{kriteria}/subkriteria', SubkriteriaController::class)
            ->parameters(['subkriteria' => 'subkriteria']);
    });

    Route::resource('alternatif', AlternatifController::class);
    Route::resource('method-profile', ProfileMethodController::class);
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('submissions', SubmissionsController::class);

    Route::post('results', [ProfileMatchingController::class, 'handleProfileMatching'])->name('results.start');
    Route::post('results/{id}', [ProfileMatchingController::class, 'submit'])->name('results.submit');
    Route::get('results/{id}', [ProfileMatchingController::class, 'data'])->name('results.data');

    Route::prefix('settings')->group(function () {
        Route::post('submited-permission/update', [SystemController::class, 'updatePermission'])->name('system.permission.update');

        Route::get('system', [SystemController::class, 'index'])->name('system.index');

        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';