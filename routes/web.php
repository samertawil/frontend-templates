<?php
 
use Illuminate\Support\Facades\Route;
use frontend\template\Http\Livewire\Test;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
 
Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){
    

    Route::get('test',Test::class);

    
  });
 

 
//  Route::view('sb','pack::components.layouts.SB-Admin-app-black');
 
 