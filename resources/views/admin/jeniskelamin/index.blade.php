@extends('admin.layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Jenis Kelamin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.jeniskelamin.create')}}" class="btn btn-block btn-default">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Jenis Kelamin</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th>ID JENIS KELAMIN</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>PILIHAN</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($JK as $jk)
                                    <tr>
                                        <td>{{$jk->id}}</td>
                                        <td>{{$jk->jenis_kelamin}}</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.jeniskelamin.edit',[$jk->id])}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('admin.jeniskelamin.destroy', [$jk->id])}}" method="POST" onsubmit="return confirm('Hapus Jenis Kelamin {{$jk->jenis_kelamin}}?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
