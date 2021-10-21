<?php

use Illuminate\Http\Request;

Route::get('/','PagesController@home');

Route::get('/','PagesController@apropos');

Route::get('/','PagesController@services');
