@extends('admin.layout.master')

@section('content')
<link rel="apple-touch-icon" href="apple-icon.png">
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/themify-icons/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/selectFX/css/cs-skin-elastic.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!--Fontawesome icon -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">

                            @if(session()->get('sukses'))
                                <div class="alert alert-success">
                                    {{session()->get('sukses')}}
                                </div>
                            @endif

                            <div class="card-header">
                                <strong class="card-title">{{$pagename}}</strong>
                                <a class="btn btn-primary pull-right" href="{{route('tugas.create')}}"
                                >Tambahkan Tugas</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <!-- <th>Tanggal Ditambahkan</th>
                                            <th>Terakhir Diubah</th> -->
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i=>$row)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$row->nama_tugas}}</td>
                                                <td>{{$row->id_kategori}}</td>
                                                <td>{{$row->ket_tugas}}</td>
                                                <td>{{$row->status_tugas}}</td>
                                                <!-- <td>{{$row->created_at}}</td>
                                                <td>{{$row->updated_at}}</td> -->
                                                <td> <a href="{{route('tugas.edit',$row->id)}}" class="btn btn-primary">
                                                <!-- <i class="fas fa-edit"></i> -->
                                                Edit</a></td>
                                                <td>
                                                    <form action="{{route('tugas.destroy', $row->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Hapus</button>
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
            </div><!-- .animated -->
        </div><!-- .content -->
    
        <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/assets/js/main.js')}}"></script>


        <script src="{{asset('public/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('public/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('public/vendors/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{asset('public/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('public/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('public/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('public/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('public/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('public/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

        <!--script dari bottom-->
        <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/assets/js/main.js')}}"></script>


        <script src="{{asset('public/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('public/assets/js/dashboard.js')}}"></script>
        <script src="{{asset('public/assets/js/widgets.js')}}"></script>
        <script src="{{asset('public/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
        <script src="{{asset('public/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script>
            (function($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>
@endsection