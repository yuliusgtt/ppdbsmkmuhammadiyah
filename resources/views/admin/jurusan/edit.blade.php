@extends('admin.layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Jurusan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Jurusan</h3>
                        </div>

                        <form class="form-horizontal" action="{{route('admin.jurusan.update', [$Data->id])}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control {{ $errors->has('jurusan') ? 'is-invalid' : '' }}" id="jurusan" value="{{$Data -> jurusan}}" name="jurusan" required>
                                        @if($errors->has('jurusan'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('jurusan') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control {{ $errors->has('kode') ? 'is-invalid' : '' }}" id="kode" value="{{$Data -> kode}}" name="kode">
                                        @if($errors->has('kode'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('kode') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-default float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
