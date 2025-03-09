<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::view('/profile', 'profile');

Route::post('/submit-profile', [ProfileController::class, 'submit']);

Route::get('/', function () {
    return view('welcome');
});
