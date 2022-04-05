<?php

use Charleskoko\SanctumAuthentication\Http\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::post('api/v1/register', [AuthenticationController::class,'register'])->name('api.v1.register');
Route::post('api/v1/login', [AuthenticationController::class, 'login'])->name('api.v1.login');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('api/v1/logout', [AuthenticationController::class,'logout'])->name('api.v1.logout');
});
