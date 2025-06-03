<?php

use App\Http\Controllers\System\LocaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;



    
    
    Route::middleware(['auth', 'verified'])->group(function(){
    
    
    Route::get('/home', function () {
        // Auth::logout();
        return dd(Auth::user()->name, Auth::user()->id, Auth::user()->email);
    });
    
    
    });

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/logout', function(){
        Auth::logout();
        return back();
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

    Route::get('/locale/{locale}', [LocaleController::class, 'setLocale'])->name('locale');
