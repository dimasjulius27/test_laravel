<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    public function index(){
    	return view('home_blog');
    }

    public function tentang(){
    	return view('tentang');
    }

    public function contact(){
    	// return "kontak";
    	return view('contact');
    }
}
