@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Anda</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Calon Siswa</h3>
                        </div>

                        <form class="form" action="{{route('siswa.pendaftaran.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">

                                <div class="row justify-content-center">
                                    <img class="img-fluid" src="{{asset('adminlte')}}/dist/img/Default-photo.png" id="preview" alt="preview" style="width: 200px; height: 300px;">
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">FOTO 3x4</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" accept="image/*" class="custom-file-input" id="foto" name="foto" required onchange="showFile()">
                                            <label for="foto" class="custom-file-label">FOTO 3x4</label>
                                            @if($errors->has('foto'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('foto') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="col-form-label">NAMA</label>
                                    <input type="text" class="form-control text-uppercase {{ $errors->has('nama') ? 'is-invalid' : '' }}" id="nama" placeholder="nama" name="nama" required>
                                    @if($errors->has('nama'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nama') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="sekolah_asal" class="col-form-label">SEKOLAH ASAL</label>
                                    <input type="text" class="form-control text-uppercase {{ $errors->has('sekolah_asal') ? 'is-invalid' : '' }}" id="sekolah_asal" placeholder="sekolah_asal" name="sekolah_asal" required>
                                    @if($errors->has('sekolah_asal'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('sekolah_asal') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nomor_telepon" class="col-form-label">NOMOR TELEPON</label>
                                    <input type="number" class="form-control text-uppercase {{ $errors->has('nomor_telepon') ? 'is-invalid' : '' }}" id="nomor_telepon" placeholder="nomor_telepon" name="nomor_telepon" required>
                                    @if($errors->has('nomor_telepon'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nomor_telepon') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="alamat" class="col-form-label">ALAMAT</label>
                                    <input type="text" class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" id="alamat" placeholder="alamat" name="alamat" required>
                                    @if($errors->has('alamat'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('alamat') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="jurusan" class="col-form-label">PILIHAN JURUSAN</label>
                                    <select class="form-control select2 {{ $errors->has('jurusan') ? 'is-invalid' : '' }}" id="jurusan" name="id_jurusan" required>
                                        <option selected disabled hidden>Pilih Jurusan</option>
                                        @foreach($Jurusan as $j)
                                            <option value="{{$j->id}}">{{$j->jurusan}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('jurusan'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('jurusan') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin" class="col-form-label">JENIS KELAMIN</label>
                                    <select class="form-control select2 {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" id="jenis_kelamin" name="id_jenis_kelamin" required>
                                        <option selected disabled hidden>Pilih Jenis Kelamin</option>
                                        @foreach($JenisKelamin as $jk)
                                            <option value="{{$jk->id}}">{{strtoupper($jk->jenis_kelamin)}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('jenis_kelamin'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('jenis_kelamin') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tempat_lahir" class="col-form-label">TEMPAT LAHIR</label>
                                    <input type="text" class="form-control {{ $errors->has('tempat_lahir') ? 'is-invalid' : '' }}" id="tempat_lahir" placeholder="tempat_lahir" name="tempat_lahir" required>
                                    @if($errors->has('tempat_lahir'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tempat_lahir') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tanggal_lahir" class="col-form-label">TANGGAL LAHIR</label>
                                    <input type="date" class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" id="tanggal_lahir" name="tanggal_lahir" required>
                                    @if($errors->has('tanggal_lahir'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tanggal_lahir') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nama_orang_tua" class="col-form-label">NAMA ORANG TUA</label>
                                    <input type="text" class="form-control {{ $errors->has('nama_orang_tua') ? 'is-invalid' : '' }}" id="nama_orang_tua" name="nama_orang_tua" required>
                                    @if($errors->has('nama_orang_tua'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nama_orang_tua') }}
                                        </div>
                                    @endif
                                </div>

                            </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Nilai Ujian Nasional</h3>
                        </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tahun_lulus" class="col-form-label">Tahun Lulus</label>
                                    <input type="number" min="2018" max="<?php echo date("Y"); ?>" class="form-control text-uppercase {{ $errors->has('tahun_lulus') ? 'is-invalid' : '' }}" id="tahun_lulus" value="<?php echo date("Y"); ?>" name="tahun_lulus" required>
                                    @if($errors->has('tahun_lulus'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tahun_lulus') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="b-ind" class="col-form-label">Nilai Bahasa Indonesia</label>
                                    <input type="number" max="100" class="form-control text-uppercase {{ $errors->has('b-ind') ? 'is-invalid' : '' }}" id="b-ind" value="0" name="b_ind" required>
                                    @if($errors->has('b-ind'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('b-ind') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="b-ing" class="col-form-label">Nilai Bahasa Inggris</label>
                                    <input type="number" max="100" class="form-control text-uppercase {{ $errors->has('b-ing') ? 'is-invalid' : '' }}" id="b-ing" value="0" name="b_ing" required>
                                    @if($errors->has('b-ing'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('b-ing') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="mtk" class="col-form-label">Nilai Matematika</label>
                                    <input type="number" max="100" class="form-control text-uppercase {{ $errors->has('mtk') ? 'is-invalid' : '' }}" id="mtk" value="0" name="mtk" required>
                                    @if($errors->has('mtk'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('mtk') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="ipa" class="col-form-label">Nilai Ilmu Pengetahuan Alam</label>
                                    <input type="number" max="100" class="form-control text-uppercase {{ $errors->has('ipa') ? 'is-invalid' : '' }}" id="ipa" value="0" name="ipa" required>
                                    @if($errors->has('ipa'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ipa') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                    </div>
                </div>

                <div class="col-6">
                    <div class="card card-info">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus"></i>Tambah Data</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        if (window.File && window.FileList && window.FileReader) {
            function showFile() {
                var preview = document.getElementById("preview");
                var fileInput = document.querySelector("input[type=file]");

                for (var i = 0; i < fileInput.files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(readerEvent) {
                        $('#preview').attr('src', readerEvent.target.result);
                    }
                    reader.readAsDataURL(fileInput.files[i]);
                }
                preview.innerHTML ='';
            }
        } else {
            alert("Your browser is too old to support HTML5 File API");
        }
    </script>
@endsection
