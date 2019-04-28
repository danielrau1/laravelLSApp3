<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // return 'INDEX'; //[2]

        return view('pages/index'); //[3] use the controller method to return a view
    }

    public function about(){

        return view('pages/about');
    }

    public function services(){

        return view('pages/services');
    }

}
