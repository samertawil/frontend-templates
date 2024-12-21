<?php
 
use Illuminate\Support\Facades\Route;
use frontend\template\Http\Livewire\Home;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
 
Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){
    

    Route::get('home',Home::class)->name('home');

    
  });
 

 
//  Route::view('sb','pack::components.layouts.SB-Admin-app-black');
 
 