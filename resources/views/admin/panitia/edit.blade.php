@extends('admin.layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h1>Edit Data Panitia</h1>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Panitia</h3>
                        </div>

                        <form class="form-horizontal" action="{{route('admin.panitia.update',[$Data->id])}}" method="POST">
                            @csrf

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Anda</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control text-uppercase {{ $errors->has('nama') ? 'is-invalid' : '' }}" id="nama" value="{{$Data->nama}}" name="nama" required>
                                        @if($errors->has('nama'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('nama') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control text-uppercase {{ $errors->has('nomor_telepon') ? 'is-invalid' : '' }}" id="nomor_telepon" value="{{$Data->nomor_telepon}}" name="nomor_telepon" required>
                                        @if($errors->has('nomor_telepon'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('nomor_telepon') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control text-uppercase {{ $errors->has('alamat') ? 'is-invalid' : '' }}" id="alamat" value="{{$Data->alamat}}" name="alamat" required>
                                        @if($errors->has('alamat'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('alamat') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" id="jenis_kelamin" name="id_jenis_kelamin" required>
                                            @foreach($JenisKelamin as $jk)
                                                <option value="{{$jk->id}}" <?php if($jk->id == $Data->id_jenis_kelamin){ echo 'selected';} ?>>{{$jk->jenis_kelamin}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('jenis_kelamin'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('jenis_kelamin') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-default float-right"><i class="fa fa-save"></i> Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
