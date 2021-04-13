<?php

namespace App\Http\Controllers;

use App\CalonSiswa;
use Illuminate\Http\Request;

class CekStatusController extends Controller
{
    public function cek(Request $request){
        $Data = CalonSiswa::find($request->nomor_pendaftaran);

        return view('hasilcek',compact('Data'));
    }
}
