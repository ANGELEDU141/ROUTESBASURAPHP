<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');


});

Route:: get('/villa/home',[HomeController::class,'home_GET'])->name('route-home');
Route:: get('/villa/about',[HomeController::class,'about_GET'])->name('route-about');
Route:: get('/villa/contact',[HomeController::class,'contact_GET'])->name('route-contact');
Route:: get('/ABANTO/paginaloca',[HomeController::class,'paginaloca_GET'])->name('route-paginaloca');




