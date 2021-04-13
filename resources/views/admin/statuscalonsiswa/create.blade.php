@extends('admin.layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Status Calon Siswa</h1>
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
                            <h3 class="card-title">Data Status Calon Siswa</h3>
                        </div>

                        <form class="form-horizontal" action="{{route('admin.statuscalonsiswa.store')}}" method="POST">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="statuscalonsiswa" class="col-sm-2 col-form-label">Status Calon Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control text-uppercase {{ $errors->has('statuscalonsiswa') ? 'is-invalid' : '' }}" id="statuscalonsiswa" placeholder="statuscalonsiswa" name="status" required autocomplete="off">
                                        @if($errors->has('statuscalonsiswa'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('statuscalonsiswa') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-default float-right"><i class="fa fa-plus"></i>Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
