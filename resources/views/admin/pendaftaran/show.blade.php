@extends('admin.layouts.app')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendaftaran</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title">Data Siswa</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nama" class="col-form-label">Nama</label>
                                <input type="text" class="form-control text-uppercase" id="nama" value="{{$Data->nama}}" name="nama" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="nomor_telepon" class="col-form-label">Nomor Telepon</label>
                                <input type="number" class="form-control text-uppercase" id="nomor_telepon" value="{{$Data->nomor_telepon}}" name="nomor_telepon" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="email" class="form-control text-uppercase" id="email" value="{{$Data->user->email}}" name="email" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="sekolah_asal" class="col-form-label">Sekolah Asal</label>
                                <input type="text" class="form-control text-uppercase" id="sekolah_asal" value="{{$Data->sekolah_asal}}" name="sekolah_asal" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="nama_orang_tua" class="col-form-label">Nama Orang Tua</label>
                                <input type="text" class="form-control text-uppercase" id="nama_orang_tua" value="{{$Data->nama_orang_tua}}" name="nama_orang_tua" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control text-uppercase" id="alamat" value="{{$Data->alamat}}" name="alamat" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control text-uppercase" id="jenis_kelamin" value="{{$Data->jeniskelamin->jenis_kelamin}}" name="jeniskelamin" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="jurusan" class="col-form-label">Jurusan Pilihan</label>
                                <input type="text" class="form-control text-uppercase" id="jurusan" value="{{$Data->jurusan->jurusan}}" name="jurusan" readonly>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="ttl" class="col-form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control text-uppercase" id="ttl" value="{{$Data->tempat_lahir}}" name="tempat_lahir" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label for="ttl" class="col-form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control text-uppercase" id="ttl" value="{{$Data->tanggal_lahir}}" name="tempat_lahir" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title">Foto</h3>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{asset('storage/foto_calon_siswa/'.$Data->foto)}}" class="img-thumbnail" id="preview" alt="preview" style="width: 200px; height: 300px;">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title">Data Nilai Ujian Nasional</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tahun_lulus" class="col-form-label">Tahun Lulus</label>
                                <input type="text" class="form-control text-uppercase" id="tahun_lulus" value="{{$Data->tahun_lulus}}" name="tahun_lulus" readonly>
                            </div>
                            <div class="form-group">
                                <label for="bhs_ind" class="col-form-label">Bahasa Indonesia</label>
                                <input type="text" class="form-control text-uppercase" id="bhs_ind" value="{{$Data->b_ind}}" name="b_ind" readonly>
                            </div>
                            <div class="form-group">
                                <label for="b_ing" class="col-form-label">Bahasa Inggris</label>
                                <input type="text" class="form-control text-uppercase" id="b_ing" value="{{$Data->b_ing}}" name="b_ing" readonly>
                            </div>
                            <div class="form-group">
                                <label for="mtk" class="col-form-label">Matematika</label>
                                <input type="text" class="form-control text-uppercase" id="mtk" value="{{$Data->mtk}}" name="mtk" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ipa" class="col-form-label">Ilmu Pengetahuan Alam</label>
                                <input type="text" class="form-control text-uppercase" id="ipa" value="{{$Data->ipa}}" name="ipa" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card-body">
                    <a href="{{route('admin.pendaftaran.cetak',[$Data->id_user])}}" class="btn btn-block btn-warning">
                        <i class="fa fa-download"></i>
                        Download Kartu Pendaftaran
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
