<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;



Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/test',[TestsController::class, 'getTestQuestions'])->name('getTestQuestions');
Route::post('/submit/exam',[TestsController::class, 'submitExam'])->name('submitExam');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $data = "this is the data";
    return view('dashboard',['data' => $data]);
})->name('dashboard');
