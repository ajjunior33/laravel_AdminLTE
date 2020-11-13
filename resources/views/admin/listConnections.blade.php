@extends('template.default')

@section('title', 'Lista de Usuarios')
@section('conteudo')
@section("titlePage", "Lista de Usuarios")

@section('caminho')

<li class="breadcrumb-item">
    <a href="/dashboard">
        <i class="fas fa-home"></i>
    </a>
</li>
<li class="breadcrumb-item active">
    Conexões
</li>
@endsection
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="box">
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Login</th>
                            <th>Grupo</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 5; $i++) <tr>
                            <td>{{$i}}.</td>
                            <td>12345678910@nwt.net.br</td>
                            <td>
                                25_MEGA_RESIDENCIAL
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{$i}})">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="btn btn-warning btn-sm" onclick="handleEdit({{$i}})"><i
                                        class="fas fa-pen"></i></button>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</section>
<!-- /.content -->

@endsection

@section('script')
<script>
    function handleDelete(id){
            console.log(id);
        }
        function handleEdit(id){
            console.log(id);
        }
</script>
@endsection