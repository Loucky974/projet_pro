<?php

namespace App\Http\Controllers;
use App\ImageGallery;



use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ImageGallery::get();
     
        return view('news',compact('images'));
    }
}
