<?php

namespace App\Http\Controllers\Siswa;

use App\CalonSiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function index(){

        abort_if(Gate::denies('Siswa'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Data = CalonSiswa::where('id_user',Auth::id())->first();

        return view('siswa.dashboard',compact('Data'));

    }


}
