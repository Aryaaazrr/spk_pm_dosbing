<?php

use App\Http\Controllers\Api\V1\Alternatif\AlternatifController;
use App\Http\Controllers\Api\V1\Aspek\AspekController;
use App\Http\Controllers\Api\V1\Kriteria\KriteriaController;
use App\Http\Controllers\Api\V1\ProfileMethod\ProfileMethodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('aspek')->group(function () {
        Route::get('/', [AspekController::class, 'index']);
    });

    Route::prefix('kriteria')->group(function () {
        Route::get('/', [KriteriaController::class, 'index']);
    });

    Route::prefix('alternatif')->group(function () {
        Route::get('/', [AlternatifController::class, 'index']);
    });

    Route::prefix('profile-method')->group(function () {
        Route::get('/', [ProfileMethodController::class, 'index']);
    });

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');
});