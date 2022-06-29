<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {


    return view('welcome');
});


Route::view('master',"layoute.master");

Route::get('home',function(){
    return view('pages.home');
})->name('home');

//  use Eloquant modal for read ya deta in DB


Route::get('/list',[PageController::class,'list']);






