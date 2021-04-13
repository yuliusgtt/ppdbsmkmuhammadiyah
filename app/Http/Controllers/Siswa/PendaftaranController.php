<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\JenisKelamin;
use App\Jurusan;
use Illuminate\Http\Request;
use App\CalonSiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{

    public function create(){
        $JenisKelamin = JenisKelamin::all();
        $Jurusan = Jurusan::all();

        return view('siswa.pendaftaran.create',compact('JenisKelamin','Jurusan'));
    }

    public function store(Request $request){

        $jumlah_daftar = CalonSiswa::where('id_jurusan','=',$request->id_jurusan)->count();
        $jurusan = Jurusan::find($request->id_jurusan);

        $filename = $request->foto->store('public/foto_calon_siswa');

        CalonSiswa::create([
            'nomor_pendaftaran' => $jurusan->kode.'-'.date("Y").'-'.sprintf('%03d', $jumlah_daftar + 1),
            'id_user' => Auth::id(),
            'nama' => $request->nama,
            'foto' => str_replace('public/foto_calon_siswa/','',$filename),
            'id_jurusan' => $request->id_jurusan,
            'sekolah_asal' => $request->sekolah_asal,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_orang_tua' => $request->nama_orang_tua,
            'id_jenis_kelamin' => $request->id_jenis_kelamin,

            'tahun_lulus' => $request->tahun_lulus,
            'b_ind' => $request->b_ind,
            'b_ing' => $request->b_ing,
            'mtk' => $request->mtk,
            'ipa' => $request->ipa,

            'id_status_calon_siswa' => 1,
        ]);

        return redirect()->route('siswa.dashboard')->with('status','berhasil menyimpan data calon siswa');
    }

    public function edit($id){
        $JenisKelamin = JenisKelamin::all();
        $Jurusan = Jurusan::all();

        $Data = CalonSiswa::find($id);

        return view('siswa.pendaftaran.edit',compact('Data','JenisKelamin', 'Jurusan'));
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

        $Data->save();

        return redirect()->route('siswa.dashboard')->with('status','berhasil mengubah data calon siswa');
    }

    public function destroy($id){
        CalonSiswa::destroy($id);

        return back();
    }
}
