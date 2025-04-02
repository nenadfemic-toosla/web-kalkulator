<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::post('/add', [CalculatorController::class, 'add']);
    Route::post('/subtract', [CalculatorController::class, 'subtract']);
    Route::post('/multiply', [CalculatorController::class, 'multiply']);
    Route::post('/divide', [CalculatorController::class, 'divide']);
});
