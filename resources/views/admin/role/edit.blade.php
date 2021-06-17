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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function(){
        $(".mul-select").select2({
            placeholder: "Pilih permission ...",
            tags: true,
            tokenSeparators: ['/',',',';', ' '],
            width: "100%"
        })
    });
</script>

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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header">
                        <strong>{{$pagename}}</strong>
                        <!-- <a class="btn btn-primary pull-right" href="{{route('tugas.index')}}"
                        >Kembali</a> -->
                    </div>
                    <div class="card-body card-block">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <div class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                    {{$error}}
                                    </li>                                
                                @endforeach
                            </div>
                        </div>
                    @endif

                        <form action="{{route('roles.update',$role->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @method('PATCH')
                        @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Role</label></div>
                        <div class="col-12 col-md-9"><input type="text" value="{{$role->name}}" id="text-input" name="txtnama_role" placeholder="Tuliskan nama role" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Permission</label></div>
                        <div class="col-12 col-md-9">
                            <select name="optionid_permission[]" id="select" class="mul-select" multiple="true">
                                @foreach($allPermission as $permission)
                                    <option value= {{$permission->id}}
                                    @if (in_array($permission->id,$rolePermission))
                                        selected
                                    @endif
                                    >
                                    {{$permission->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Simpan
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<script src="{{asset('public/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

<!--script dari bottom-->
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

<!--
    shift + tab = kurangi indentasi baris
    tab = tambah indentasi baris
-->