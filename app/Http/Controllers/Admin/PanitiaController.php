<?php

namespace App\Http\Controllers\Admin;

use App\Agama;
use App\Http\Controllers\Controller;
use App\JenisKelamin;
use App\Panitia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanitiaController extends Controller
{
    public function create(){
        $JenisKelamin = JenisKelamin::all();

        return view('admin.panitia.create',compact('JenisKelamin'));
    }

    public function store(Request $request){

        Panitia::create([
            'id_user' => Auth::id(),
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'id_jenis_kelamin' => $request->id_jenis_kelamin,
        ]);

        return redirect()->route('admin.dashboard')->with('status','Data Anda telah Ditambahkan');
    }

    public function edit($id){
        $JenisKelamin = JenisKelamin::all();

        $Data = Panitia::find($id);

        return view('admin.panitia.edit', compact('Data', 'JenisKelamin'));
    }

    public function update($id, Request $request){

        $Data = Panitia::find($id);

        $Data->nama = $request->nama;
        $Data->nomor_telepon = $request->nomor_telepon;
        $Data->alamat = $request->alamat;
        $Data->id_jenis_kelamin = $request->id_jenis_kelamin;


        $Data->save();

        return redirect()->route('admin.dashboard');
    }
}
