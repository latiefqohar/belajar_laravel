<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input(){
        return view('input');//panggil view input
    }

    public function proses(Request $request)
    {
        $messages = [ //custom message
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        $this->validate($request,[ //validasi
            'nama'=>'required|min:5|max:20', //field nama minimal 5 maksimal 20
            'pekerjaan'=>'required',//fiel pekerjaan harus diisi
            'usia'=>'required|numeric'//usia harus diisi nomor
        ],$messages);//masukkan variable custom message($message)

        return view('proses',['data'=>$request]);//panggil view proses jika validasi ok
    }

}
