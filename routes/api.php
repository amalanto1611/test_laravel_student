<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);
Route::post('/toggle-status', [StudentController::class, 'toggleStatus']);