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
                <form id="create_group" method="post">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nome">Nome do Grupo </label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="25_MEGA">
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
@section('script')
<script>
    $("#create_group").submit((e) => {
        e.preventDefault();
        const url = '/dashboard/createGroup';
        let dados = $("#create_group").serialize();
        $.post(url, dados, (response) => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            if(response.status == false){
                Toast.fire({
                    icon: 'error',
                    title: response.message
                });
            }else{
                Toast.fire({
                    icon: 'success',
                    title: response.message
                });
            }
        });
    });
</script>
@endsection