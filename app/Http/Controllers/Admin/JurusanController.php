<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    public function index(){
        $Data = Jurusan::all();

        return view('admin.jurusan.index',compact('Data'));
    }


    public function show($id){
        $Data = Jurusan::find($id);

        return view('admin.jurusan.show',compact('Data'));
    }

    public function create(){

        return view('admin.jurusan.create');
    }

    public function store(Request $request){

        Jurusan::create([
            'jurusan' => strtoupper($request->jurusan),
            'kode' => strtoupper($request->kode)
        ]);

        return redirect()->route('admin.jurusan.index')->with('status','berhasil menambah data jurusan : '.$request->jurusan);
    }

    public function edit($id){
        $Data = Jurusan::find($id);


        return view('admin.jurusan.edit',compact('Data'));
    }

    public function update($id, Request $request){
        $Data = Jurusan::find($id);

        $Data->jurusan = strtoupper($request->jurusan);
        $Data->kode = strtoupper($request->kode);

        $Data->save();

        return redirect()->route('admin.jurusan.index')->with('status','berhasil mengubah data jurusan');
    }

    public function destroy($id){
        Jurusan::destroy($id);

        return redirect()->route('admin.jurusan.index')->with('status','berhasil menghapus data jurusan');
    }

}
