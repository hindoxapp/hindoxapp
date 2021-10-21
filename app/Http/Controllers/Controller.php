<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;


class pagesController extends Controller
{
   public function home() {                                                                                                                                           
        //return view('welcome');
        return view('pages.home');
    };
}
