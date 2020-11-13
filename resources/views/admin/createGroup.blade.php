@extends('template.default')

@section('title', 'Cadastrar Usuario')
@section('conteudo')
@section("titlePage", "Cadastrar Usuario")

@section('caminho')

<li class="breadcrumb-item">
    <a href="/dashboard">
        <i class="fas fa-home"></i>
    </a>
</li>
@endsection
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="group_name">Nome do Grupo </label>
                            <input type="text" class="form-control" id="group_name" name="group_name"
                                placeholder="25_MEGA">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i>
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->


@endsection