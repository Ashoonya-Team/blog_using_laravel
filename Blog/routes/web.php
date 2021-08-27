<?php

use App\Http\Controllers\signup_controller;
use App\Models\signup;
use Illuminate\Support\Facades\Route;


Route::get('/signup', function () {
    return view('signup');
});

// This line is responsible to store data from the form.
// it help us to connect frontend(signup.blade.php) with backend(singup_controller.php(method(store())))
// Author:Surwase Chaitanya
Route::post('/Register', 'App\Http\Controllers\signup_controller@store');
Route::post('/UserLogin', 'App\Http\Controllers\signup_controller@userValidation');

Route::view('home', 'home');

//Route for login page --|Trying(Y)|/|Completed(N)|
Route::get('/login', function () {
    return view('login');
});
