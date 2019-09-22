<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function index($nama=null){
    	// return "biodataController";
    	return view('biodata',['nama'=>$nama]);
    }

    public function form(){
    	return view('form');
    }

    public function prosesnya(Request $req){
    	$nama=$req->input('nama');
    	$alamat=$req->input('alamat');
    	return "Nama= $nama Alamat= $alamat";
    }
}
