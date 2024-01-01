<?php

use App\Http\Controllers\Api\V1\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('students', StudentController::class);
});