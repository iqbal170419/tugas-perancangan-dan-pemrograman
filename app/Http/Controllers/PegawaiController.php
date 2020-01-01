<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controllers
{
    public function index($nama){
        return $nama;
    }
    public function formulir(){
        return view('fourmulir');
    }
    public function proses(Request $request){
        $nama= $request->input('nama');
        $alamat= $request->input('alamat');
        return "Nama" : ".$nama.", Alamat : ".$alamat";
    }
}