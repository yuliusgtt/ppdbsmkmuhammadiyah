@extends('admin.layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Jenis Kelamin</h1>
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
                            <h3 class="card-title">Data Jenis Kelamin</h3>
                        </div>

                        <form class="form-horizontal" action="{{route('admin.jeniskelamin.update', [$jk->id])}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" id="jenis_kelamin" value="{{$jk -> jenis_kelamin}}" name="jenis_kelamin">
                                        @if($errors->has('jenis_kelamin'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('jenis_kelamin') }}
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
