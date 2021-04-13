<?php

namespace App\Http\Controllers\Admin;

use App\CalonSiswa;
use App\Http\Controllers\Controller;
use App\Panitia;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $Data = Panitia::where('id_user',Auth::id())->first();

        $CalonSiswa = CalonSiswa::orderby('created_at','desc')->take(10)->get();

        $Total = CalonSiswa::count();

        Carbon::setWeekStartsAt(Carbon::SUNDAY);

        $PendaftarBaru = CalonSiswa::whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->count();

        return view('admin.dashboard',compact('Data','CalonSiswa','Total','PendaftarBaru'));
    }
}
