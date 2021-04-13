<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        if (Gate::denies('Admin')) {
            return view('welcome');
        }

        return redirect('admin');
    }
}
