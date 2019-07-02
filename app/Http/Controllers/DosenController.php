<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){ //fungsi index
        $nama='abdul latief qohar'; //variable nama diisi dengan string nama
        $pelajaran=['algo','kalkulus','web']; //variable pelajaran diisi dengan array algo kalkulus dan web
        return view('biodata',['nama'=>$nama,'matkul'=>$pelajaran]);//tampilka view biodata dan kirimkan data nama dan matkul
    }
}
