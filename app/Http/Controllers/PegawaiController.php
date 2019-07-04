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
      //ini adalah index laravel
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
    //methode index
    public function edit($id){
        //mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        //parsing data pegawai yang di dapat ke view edit.blade.php 
        return view('edit',['pegawai'=>$pegawai]);

    }

    public function update(Request $request){
        //updatedata pegawai di database
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        
        //redirect ke pegawaicontroller method index(lihat di route)
        return redirect('/pegawai');
    }
    //method untuk hapus data
    public function hapus($id){
        //menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        //alihkan  halaman ke /pegawai
        return redirect('/pegawai');

    }
}
