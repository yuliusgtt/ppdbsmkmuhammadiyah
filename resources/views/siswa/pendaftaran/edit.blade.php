@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data calon siswa</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            @if($Data)
                <form class="col-12" action="{{route('siswa.pendaftaran.update',[$Data->nomor_pendaftaran])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="card-title">Data anda</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama" class="col-form-label">Nama</label>
                                        <input type="text" class="form-control text-uppercase" id="nama" value="{{$Data->nama}}" name="nama" required autocomplete="off">
                                    </div>

                                    <div class="form-group row">
                                        <label for="nomor_telepon" class="col-form-label">Nomor Telepon</label>
                                        <input type="number" class="form-control text-uppercase" id="nomor_telepon" value="{{$Data->nomor_telepon}}" name="nomor_telepon" required autocomplete="off">
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="eamil" class="form-control text-uppercase" id="email" value="{{$Data->user->email}}" name="email" required autocomplete="off">
                                    </div>

                                    <div class="form-group row">
                                        <label for="sekolah_asal" class="col-form-label">Sekolah Asal</label>
                                        <input type="text" class="form-control text-uppercase" id="sekolah_asal" value="{{$Data->sekolah_asal}}" name="sekolah_asal" required autocomplete="off">
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_orang_tua" class="col-form-label">Nama Orang Tua</label>
                                        <input type="text" class="form-control text-uppercase" id="nama_orang_tua" value="{{$Data->nama_orang_tua}}" name="nama_orang_tua" required autocomplete="off">
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-form-label">Alamat</label>
                                        <input type="text" class="form-control text-uppercase" id="alamat" value="{{$Data->alamat}}" name="alamat" required autocomplete="off">
                                    </div>

                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                                        <select class="form-control select2" id="jenis_kelamin" name="id_jenis_kelamin" required>
                                            <option disabled hidden>Pilih Jenis Kelamin</option>
                                            @foreach($JenisKelamin as $jk)
                                                <option value="{{$jk->id}}" <?php if($jk->id == $Data->id_jenis_kelamin){ echo 'selected';} ?>>{{strtoupper($jk->jenis_kelamin)}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jurusan" class="col-form-label">Jurusan Pilihan</label>
                                        <select class="form-control select2" id="jurusan" name="id_jurusan" required>
                                            <option disabled hidden>Pilih Jurusan</option>
                                            @foreach($Jurusan as $j)
                                                <option value="{{$j->id}}" <?php if($j->id == $Data->id_jurusan){ echo 'selected';} ?>>{{$j->jurusan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="ttl" class="col-form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control text-uppercase" id="ttl" value="{{$Data->tempat_lahir}}" name="tempat_lahir" required autocomplete="off">
                                            </div>
                                            <div class="col-6">
                                                <label for="ttl" class="col-form-label">Tanggal Lahir</label>
                                                <input type="text" class="form-control text-uppercase" id="ttl" value="{{$Data->tanggal_lahir}}" name="tanggal_lahir" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="card-title">Foto</h3>
                                </div>
                                <div class="card-body text-center">
                                    <img src="{{asset('storage/foto_calon_siswa/'.$Data->foto)}}" class="img-thumbnail" id="preview" alt="preview" style="width: 106px; height: 135px;">
                                    <br>
                                    <br>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" accept="image/*" class="custom-file-input" id="foto" name="foto" onchange="showFile()">
                                            <label for="foto" class="custom-file-label">pilih file</label>
                                            @if($errors->has('foto'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('foto') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="card-title">Data Nilai Ujian Nasional</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="tahun_lulus" class="col-form-label">Tahun Lulus</label>
                                        <input type="text" class="form-control text-uppercase" id="tahun_lulus" value="{{$Data->tahun_lulus}}" name="tahun_lulus" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <p class="text-danger">* Apabila Nilai Belum Keluar, isikan 0</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="bhs_ind" class="col-form-label">Bahasa Indonesia</label>
                                        <input type="text" class="form-control text-uppercase" id="bhs_ind" value="{{$Data->b_ind}}" name="b_ind" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="b_ing" class="col-form-label">Bahasa Inggris</label>
                                        <input type="text" class="form-control text-uppercase" id="b_ing" value="{{$Data->b_ing}}" name="b_ing" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="mtk" class="col-form-label">Matematika</label>
                                        <input type="text" class="form-control text-uppercase" id="mtk" value="{{$Data->mtk}}" name="mtk" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="ipa" class="col-form-label">Ilmu Pengetahuan Alam</label>
                                        <input type="text" class="form-control text-uppercase" id="ipa" value="{{$Data->ipa}}" name="ipa" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <button type="submit" class="btn btn-warning float-right"><i class="fa fa-edit"></i>Edit Data</button>
                            </div>
                        </div>
                </div>
            </form>
                @else
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data anda</h3>
                                </div>
                                <div class="card-body">
                                    <p>data anda belum lengkap</p>
                                    <br>
                                    <a href="{{route('siswa.pendaftaran.create')}}" class="btn btn-block btn-info">
                                        <i class="fa fa-database"></i>
                                        lengkapi data pendaftaran
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
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
