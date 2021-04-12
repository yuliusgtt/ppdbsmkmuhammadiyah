<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JenisKelamin;

class JenisKelaminController extends Controller
{
    public function index(){
        $JK = JenisKelamin::all();

        return view('admin.jeniskelamin.index', compact('JK'));
    }

    public function create(){
        return view('admin.jeniskelamin.create');
    }

    public function store(Request $request){

        JenisKelamin::create([
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('admin.jeniskelamin.index')->with('status','berhasil Menambah Jenis Kelamin '.$request->jenis_kelamin);

    }

    public function edit($id){

        $jk = JenisKelamin::find($id);

        return view('admin.jeniskelamin.edit', compact('jk'));
    }

    public function update(Request $request, $id){

        $jk = JenisKelamin::find($id);

        $jk->jenis_kelamin = $request->jenis_kelamin;

        $jk->save();

        return redirect()->route('admin.jeniskelamin.index')->with('status','berhasil');

    }

    public function destroy($id){

        JenisKelamin::destroy($id);

        return back();
    }
}
