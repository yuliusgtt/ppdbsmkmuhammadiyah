@extends('layouts.welc')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h3>CEK STATUS CALON SISWA</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">

                @if($Data)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header text-center">
                                STATUS CALON SISWA
                            </div>
                            <div class="card-body text-center">
                                <h3>{{$Data->status->status}}</h3>
                                <hr>
                                <a href="{{route('cetak_pdf',[$Data->nomor_pendaftaran])}}" class="btn btn-block btn-info">
                                    <i class="fa fa-download"></i>
                                    Download Kartu Pendaftaran
                                </a>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{route('welcome')}}">KEMBALI</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header text-center">
                                STATUS CALON SISWA
                            </div>
                            <div class="card-body text-center">
                                <h6>Nomor Pendaftaran Tidak Ditemukan</h6>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{route('welcome')}}">KEMBALI</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
