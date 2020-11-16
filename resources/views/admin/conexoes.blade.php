@extends('template.default')

@section('title', 'Conexões de Usuario')
@section('conteudo')
@section("titlePage", "Conexões de Usuario")

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
    <form id="newConnection" action="{{route("admin.connection.store")}}" method="post">
        {{csrf_field()}}
        <div class="box-body">
            <div class="form-group">
                <label for="nome">Usuario </label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="arthur.vieira">
            </div>
            <div class="form-group">
                <label for="nome">Selecione um grupo </label>
                <select name="group" id="group" class="form-control">
                    @foreach ($grupos as $grupo)

                    <option value="{{$grupo['id']}}">{{$grupo['name']}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i>
                Salvar
            </button>
        </div>
    </form>

    <div class="box">
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Grupo</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($grupos as $grupo)<tr>

                        <td>{{$grupo->id}}</td>
                        <td>
                            {{$grupo->name}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</section>
<!-- /.content -->

@endsection
@section('script')
<script>
    $("#newConnection").submit(function(e) {
        e.preventDefault();

        let url = $(this).attr('action');
        console.log(url);
        const data = $(this).serializeArray();

        if(check(data)){
            $.post(url, data, function (response) {
                console.log(response);

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
                    resetform('newConnection');
                }
            })
        }
    })
</script>
@endsection