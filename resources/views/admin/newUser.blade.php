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
                            <label for="full_name">Nome completo</label>
                            <input type="text" class="form-control" id="full_name" name="full_name"
                                placeholder="João da Silva">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="seumelhor@email.com">
                        </div>
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" id="login" name="login"
                                placeholder="seumelhor_login">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="text" class="form-control" id="password" name="password"
                                placeholder="****** ">
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