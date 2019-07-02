<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // public function index($nama){
    //     return $nama;
    // }
    // public function formulir(){
    //     return view('formulir');
    // }

    // public function proses(Request $request){
    //     $nama=$request->input('nama');
    //     $alamat=$request->input('alamat');
    //     return "Nama : ".$nama.", Alamat : ".$alamat;
    // }
        
    public function index(){
        //memanggil data dari table pegawai
        $pegawai=DB::table('pegawai')->get();

        //mengirim data pegawai ke view index dengan variable pegawai
        return view('index',['pegawai'=>$pegawai]);
    }
    public function tambah(){
        return view('tambah');
    }
    public function store(Request $input){//Request baku, $input adalah variable bebas
        //insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama'=>$input->nama,//pegawai_nama adalah nama field, $input variable parameter, nama adalah nama field
            'pegawai_jabatan'=>$input->jabatan,
            'pegawai_umur'=>$input->umur,
            'pegawai_alamat'=>$input->alamat
        ]);
        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
