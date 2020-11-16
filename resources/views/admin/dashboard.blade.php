@extends('template.default')

@section('title', 'Dashboard')
@section('conteudo')
@section("titlePage", "Dashboard")

@section('caminho')

<li class="breadcrumb-item"><a href="/">
        <i class="fas fa-home"></i></a>
</li>
@endsection
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Conexões Bloqueadas</span>
                        <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Conexões ativas </span>
                        <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

        </div>
        <a href="{{route('admin.connection.index')}}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Conectar novo cliente
        </a>
    </div>
</section>
<!-- /.content -->


@endsection