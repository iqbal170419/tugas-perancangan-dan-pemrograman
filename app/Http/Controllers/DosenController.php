<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //public function index(){
        //return "Halo ini adalah method index,dalam controller DosenController";
    //}
    public function index(){
        $nama ="Muhammad Iqbal Tawakkal Nur";
        $pelajaran=["Rekayasa Aplikasi Internet","Sistem Informasi","Perancangan dan Pemrograman Web"];
        return view('biodata',['nama'=>$nama,'matkul' =>$pelajaran]);
    }
}
