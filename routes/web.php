<?php

use App\Http\Controllers\EsewaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/esewa', [EsewaController::class, 'esewaPay'])->name('esewa');
Route::get('/success', [EsewaController::class, 'esewaPaySuccess']);
Route::get('/failure', [EsewaController::class, 'esewaPayFailed']);
