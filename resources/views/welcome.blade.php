@extends('layouts.welc')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h1>SELAMAT DATANG DI WEBSITE PENERIMAAN PESERTA DIDIK BARU</h1>
                        <h1>TAHUN AJARAN 2021/2022</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-4">
                    <div class="card">
                        <div class="card-header text-center">
                            CEK STATUS CALON SISWA
                        </div>
                        <form action="{{route('cek')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border text-center {{ $errors->has('nomor_pendaftaran') ? 'is-invalid' : '' }}" id="nomor_pendaftaran" placeholder="nomor pendaftaran" name="nomor_pendaftaran" required>
                                    @if($errors->has('nomor_pendaftaran'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nomor_pendaftaran') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> CEK</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-2">

                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-body text-center">
                            @guest
                            SUDAH MENDAFTAR?, SILAHKAN LOGIN
                            <br><br>
                            <a class="btn btn-outline-primary" href="{{ route('login') }}"><i class="fa fa-user"></i> LOGIN</a>
                            <hr>
                            @if (Route::has('register'))
                                INGIN MENDAFTAR?, SILAHKAN BUAT AKUN
                                <br><br>
                                <a class="btn btn-primary" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> DAFTAR</a>
                            @endif
                            @else
                                ANDA TELAH LOGIN
                                <br><br>
                                <a class="btn btn-primary" href="{{ route('siswa.dashboard') }}"><i class="fa fa-database"></i> DASHBOARD</a>
                            @endguest
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
