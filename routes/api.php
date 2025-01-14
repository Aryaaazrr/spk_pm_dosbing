<?php

use App\Http\Controllers\Api\V1\Alternatif\AlternatifController;
use App\Http\Controllers\Api\V1\Kriteria\KriteriaController;
use App\Http\Controllers\Api\V1\ProfileMethod\ProfileMethodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
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