<?php

namespace App\Http\Controllers;

use App\CalonSiswa;
use Illuminate\Http\Request;
use PDF;

class CetakPDFController extends Controller
{
    public function cetak_pdf($id){
        $Data = CalonSiswa::find($id);

        $pdf = PDF::loadview('kartu_pdf',['Data'=>$Data])->setPaper('A4')->setOptions(['defaultFont' => 'Helvetica']);
        return $pdf->download($Data->nomor_pendaftaran);
    }
}
