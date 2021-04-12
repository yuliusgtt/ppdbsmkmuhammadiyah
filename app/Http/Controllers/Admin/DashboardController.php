<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Panitia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function index(){
        $Data = Panitia::where('id_user',Auth::id())->first();

        return view('admin.dashboard',compact('Data'));
    }
}
