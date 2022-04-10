<?php

use Charleskoko\SanctumAuthentication\Http\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::post(config('sanctumAuthentication.registration_uri'), [AuthenticationController::class, 'register']);
Route::post(config('sanctumAuthentication.login_uri'), [AuthenticationController::class, 'login']);
Route::post(config('sanctumAuthentication.logout_uri'), [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);
