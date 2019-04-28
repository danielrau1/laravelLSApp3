<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // return 'INDEX'; //[2]

        $title = "Welcome to LSApp3!";//[5] passing values into method
        //[3] use the controller method to return a view
        return view('pages/index')->with('title',$title);//[5]
    }

    public function about(){
        $title = 'About!';
        return view('pages/about')->with('title',$title); //[5b]
    }

    public function services(){
        $data = [
          'title'=>'Services!',
          'services'=>['A','B','C']
        ];
        return view('pages/services')->with($data); //[5c]
    }

}
