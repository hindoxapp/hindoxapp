<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {                                                                                                                                           
    //return view('welcome');
    return view('pages.home');
});

Route::get('/apropos', function () {
    //return view('welcome');
    return view('pages.apropos');
});
Route::get('/services', function () {
   // return view('welcome');
   return view('pages.services');
});
