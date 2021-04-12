<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CalonSiswa;
use Illuminate\Support\Facades\Auth;
use PDF;

class PendaftaranController extends Controller
{
    public function index(){
        $Data = CalonSiswa::all();

        return view('admin.pendaftaran.index',compact('Data'));
    }

    public function show($id){
        $Data = CalonSiswa::where('id_user',$id)->first();

        return view('admin.pendaftaran.show',compact('Data'));
    }

    public function cetak_pdf($id){
        $Data = CalonSiswa::where('id_user',$id)->first();

        $pdf = PDF::loadview('kartu_pdf',['Data'=>$Data])->setPaper('A4')->setOptions(['defaultFont' => 'Helvetica']);
        return $pdf->download($Data->nomor_pendaftaran);
    }
}
