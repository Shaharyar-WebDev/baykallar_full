<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

// 
Route::get('/home', function () {
    return "HEY";
});

Route::get('/command/{command}', function($command){

    $not_allowed = ['down'];

    if(in_array($command, $not_allowed)){
        abort(403);
    }

    Artisan::call($command);

    $otuput = Artisan::output();

    return nl2br($otuput);

    
});


Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/verify', 'auth.email-verify');

