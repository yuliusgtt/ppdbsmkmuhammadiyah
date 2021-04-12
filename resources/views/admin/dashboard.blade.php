@extends('admin.layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Admin</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profil Panitia test</h3>
                        </div>

                        @if($Data)
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-form-label">Nama Anda</label>
                                    <input type="text" class="form-control text-uppercase" id="nama" value="{{$Data->nama}}" name="nama" readonly>
                                </div>

                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control text-uppercase" id="nomor_telepon" value="{{$Data->nomor_telepon}}" name="nomor_telepon" readonly>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-form-label">Alamat</label>
                                    <input type="text" class="form-control text-uppercase" id="alamat" value="{{$Data->alamat}}" name="alamat" readonly>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control text-uppercase" id="jenis_kelamin" value="{{$Data->jeniskelamin->jenis_kelamin}}" name="jeniskelamin" readonly>
                                </div>
                            </div>

                        @else

                            <div class="card-body">
                                <p>Profil Anda Belum Lengkap</p>
                                <br>
                                <a href="{{route('admin.panitia.create')}}" class="btn btn-block btn-default">
                                    <i class="fa fa-database"></i>
                                    lengkapi data profil
                                </a>
                            </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
