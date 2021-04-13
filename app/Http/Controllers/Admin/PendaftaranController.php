<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JenisKelamin;
use App\Jurusan;
use App\StatusCalonSiswa;
use Illuminate\Http\Request;
use App\CalonSiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    public function index(){
        $Data = CalonSiswa::all();

        return view('admin.pendaftaran.index',compact('Data'));
    }

    public function show($id){
        $Data = CalonSiswa::find($id);

        return view('admin.pendaftaran.show',compact('Data'));
    }

    public function edit($id){
        $JenisKelamin = JenisKelamin::all();
        $Jurusan = Jurusan::all();
        $Data = CalonSiswa::find($id);

        $Status = StatusCalonSiswa::all();

        return view('admin.pendaftaran.edit',compact('JenisKelamin','Jurusan','Data','Status'));
    }

    public function update($id, Request $request){
        $Data = CalonSiswa::find($id);

        if ($request->foto){
            Storage::delete('public/foto_calon_siswa/'.$Data->foto);
            $filename = $request->foto->store('public/foto_calon_siswa');
        }

        $Data->nama = $request->nama;
        $Data->id_jurusan = $request->id_jurusan;
        if ($request->foto){
            $Data->foto = str_replace('public/foto_calon_siswa/','',$filename);
        }
        $Data->sekolah_asal = $request->sekolah_asal;
        $Data->nomor_telepon = $request->nomor_telepon;
        $Data->alamat = $request->alamat;
        $Data->tempat_lahir = $request->tempat_lahir;
        $Data->tanggal_lahir = $request->tanggal_lahir;
        $Data->nama_orang_tua = $request->nama_orang_tua;
        $Data->id_jenis_kelamin = $request->id_jenis_kelamin;

        $Data->tahun_lulus = $request->tahun_lulus;
        $Data->b_ind = $request->b_ind;
        $Data->b_ing = $request->b_ing;
        $Data->mtk = $request->mtk;
        $Data->ipa = $request->ipa;

        $Data->id_status_calon_siswa = $request->id_status_calon_siswa;

        $Data->save();

        return redirect()->route('admin.pendaftaran.index')->with('status','berhasil mengubah data calon siswa');
    }

    public function destroy($id){
        $Data = CalonSiswa::find($id);

        Storage::delete('public/foto_calon_siswa/'.$Data->foto);

        CalonSiswa::destroy($id);

        return redirect()->route('admin.pendaftaran.index')->with('status','berhasil menghapus data calon siswa');
    }
}
