@extends('admin.layouts.app')
@section('assets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h1>Dashboard Admin</h1>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profil Panitia</h3>
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
                            <div class="card-footer">
                                <a href="{{route('admin.panitia.edit',[$Data->id])}}" class="btn btn-block btn-default">
                                    <i class="fa fa-edit"></i>
                                    edit
                                </a>
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
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Total Pendaftar Baru</h2>


                            <h3>{{$PendaftarBaru}}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-people"></i>
                        </div>
                        <a href="{{route('admin.pendaftaran.index')}}" class="small-box-footer">selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Total Pendaftar</h2>


                            <h3>{{$Total}}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-people"></i>
                        </div>
                        <a href="{{route('admin.pendaftaran.index')}}" class="small-box-footer">selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pendaftar Terbaru</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th>No. Pendaftaran</th>
                                    <th>Nama</th>
                                    <th>E-Mail</th>
                                    <th>Jurusan</th>
                                    <th>PILIHAN</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($CalonSiswa as $calon)
                                    <tr>
                                        <td>{{$calon->nomor_pendaftaran}}</td>
                                        <td>{{$calon->nama}}</td>
                                        <td>{{$calon->user->email}}</td>
                                        <td>{{$calon->jurusan->jurusan}}</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.pendaftaran.show',[$calon->nomor_pendaftaran])}}" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                                            <a href="{{route('admin.pendaftaran.edit',[$calon->nomor_pendaftaran])}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('admin.pendaftaran.destroy', [$calon->nomor_pendaftaran])}}" method="POST" onsubmit="return confirm('Hapus {{$calon->nomor_pendaftaran}}?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('script')
    {{--  TABEL  --}}
    <script src="{{ asset('adminlte')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('adminlte')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
