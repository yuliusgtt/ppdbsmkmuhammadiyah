<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\StatusCalonSiswa;
use Illuminate\Http\Request;

class StatusCalonSiswaController extends Controller
{
    public function index(){
        $Data = StatusCalonSiswa::all();

        return view('admin.statuscalonsiswa.index', compact('Data'));
    }

    public function create(){
        return view('admin.statuscalonsiswa.create');
    }

    public function store(Request $request){
        StatusCalonSiswa::create([
            'status'=>strtoupper($request->status)
        ]);

        return redirect()->route('admin.statuscalonsiswa.index')->with('status','berhasil menambah status calon siswa : '.$request->status);
    }

    public function edit($id){
        $Data = StatusCalonSiswa::find($id);

        return view('admin.statuscalonsiswa.edit',compact('Data'));
    }

    public function update($id, Request $request){
        $Data = StatusCalonSiswa::find($id);

        $Data->status = strtoupper($request->status);

        $Data->save();

        return redirect()->route('admin.statuscalonsiswa.index')->with('status','berhasil mengubah data status calon siswa');
    }

    public function destroy($id){
        StatusCalonSiswa::destroy($id);

        return redirect()->route('admin.statuscalonsiswa.index')->with('status','berhasil menghapus data status calon siswa');
    }


}
