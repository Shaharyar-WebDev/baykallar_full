<?php

use App\Livewire\Admin\Cms\Pages\NavbarManagement;
use App\Livewire\Admin\Home;
use App\Livewire\Auth\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\System\LocaleController;
use App\Livewire\Admin\Cms\Home as CmsHome;

    Route::middleware(['auth', 'verified'])->group(function(){
    
    
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

    
    Route::prefix('admin')->group(function(){
        
        
            Route::get('/login', Login::class)->middleware(['locale', 'guest'] );
            
            Route::middleware(['locale', 'auth', 'role:admin|manager'])->group(function(){

                Route::get('/home', Home::class)->name('admin.home');

                Route::prefix('/cms')->group(function(){

                    Route::get('/', CmsHome::class)->name('cms')->middleware([ 'permission:administration']);
                    
                    Route::get('/navbar-management', NavbarManagement::class)->name('navbar.management');
                });

                Route::get('preview/{component}/{layout}', function($component, $layout){

                    return view('components.page-components.preview', [
                        'component' => $component,
                        'layout' => $layout
                    ]);

                })->name('preview');

                    
            });   

    });
    
    Route::redirect('/admin', '/admin/home');

     Route::get('/home', function () {
        return view('livewire.frontend.pages.home');
    })->name('home');


    //      Route::get('/home', function () {
    //     return dd(Auth::user()->name, Auth::user()->id, Auth::user()->email);
    // })->name('home');
