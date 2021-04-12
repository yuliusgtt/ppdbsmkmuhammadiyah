@extends('admin.layouts.app')

@section('assets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Calon Siswa</h3>
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
                                @foreach($Data as $calon)
                                    <tr>
                                        <td>{{$calon->nomor_pendaftaran}}</td>
                                        <td>{{$calon->nama}}</td>
                                        <td>{{$calon->user->email}}</td>
                                        <td>{{$calon->jurusan->jurusan}}</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.pendaftaran.show',[$calon->id_user])}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
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
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
