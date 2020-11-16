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
                            <th>Grupo</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($conexoes as $conexao)<tr>

                            <td>{{$conexao->id}}</td>
                            <td>
                                {{$conexao->name}}
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{$conexao->id}})">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="btn btn-warning btn-sm" onclick="handleEdit({{$conexao->id}}, {{$conexao->name}})"><i
                                        class="fas fa-pen"></i></button>
                            </td>
                        </tr>
                        @endforeach
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
        Swal.fire({
            title: 'Realmente deseja excluir esse registro?',
            showDenyButton: true,
            confirmButtonText: `Excluir`,
            denyButtonText: `Cancelar`,
        }).then((result) => {
            if(result.isConfirmed == true){
                const url = `/dashboard/deleteConnection/${id}`;
                $.get(url, (response) => {
                    if(response.status === true){
                        Swal.fire(
                            'Good job!',                            
                            response.message,
                            'success'
                        ).then((r) => {
                            location.reload();
                        });
                    }else{
                        Swal.fire(
                            'Error',
                            response.message,
                            'error'
                        ).then((r) => {
                            location.reload();
                        });
                    }

                });
            }
        })
        }
        function handleEdit(id, name){
            let url = '/dashboard/updateGroup'
            Swal.fire({
                title:"Editar nome do grupo",
                input: 'text',
                inputLabel: 'You groupname',
                inputValue: name,
                showCancelButton:true,
                inputValidator: (value) =>{
                    if(!value){
                        return "Você precisa informar um nome para o grupo."
                    }
                }
            })

            // $.ajax({
            //     url,
            //     type: "DELETE",
            //     success: (response) => {
            //         console.log(response)
            //     }
            // })
        }
</script>
@endsection