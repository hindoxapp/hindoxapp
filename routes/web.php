<?php

use Illuminate\Support\Facades\Route;

Route::get('/message', function () {
   // return view('welcome');
   return '<h1> Bonjour </h1>';
});
Route::get('/apropos/{nom}/{id}', function ($nom,$id) {
    return '<h1> mon nom est '.$nom.'est mon id est '.$id.'</h1>';
 });