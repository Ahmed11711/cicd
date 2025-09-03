<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendSmsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('test',[sendSmsController::class, 'sendTest']);
