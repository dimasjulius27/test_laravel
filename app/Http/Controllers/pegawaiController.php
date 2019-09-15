<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function index()
    {
    	// return "Halo ini adalah method index, dalam controller Pegawai";
    	$nama = 'Dimastyo';
    	$arr_matkul = ['Analgor', 'kalkulus', 'RPL'];
    	return view('biodata',['nama'=>$nama, 'arr_matkul'=>$arr_matkul]);
    }
}
