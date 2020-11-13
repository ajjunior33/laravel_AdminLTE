<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use Exception;
use Symfony\Component\Process\ExecutableFinder;

class GruposController extends Controller
{
    public function index()
    {
        $conexoes = Grupo::all();

        return view('admin.listConnections', compact('conexoes'));
    }
    public function create(Request $request)
    {
        $dados = $request->all();
        $alert = [];
        if (isset($dados['status'])) {
            $alert['message'] = $dados['message'];
            $alert['status'] = $dados['status'];
        }

        return view('admin.createGroup', ['alert' => $alert]);
    }
    public function store(Request $request)
    {
        $dados = $request->all();

        $nome = $dados['nome'];
        $verify = Grupo::where(['name' => $nome])->count();
        if ($verify > 0) {
            return ['status' => false, 'message' => "Esse grupo já existe."];
        }

        Grupo::create(['name' => $nome]);
        return ['status' => true, 'message' => "Grupo criado com sucesso."];
    }
    public function destroy($id)
    {
        try {
            $delete = Grupo::find($id);
            $delete->delete();

            return ['status' => true, 'message' => "Deletado com sucesso."];
        } catch (Exception $error) {
            return ['status' => false, 'message' => "Erro ao deletar esse grupo."];
        }
    }
    public function update(Request $request, $id)
    {

        try {
            $data = $request->all();
            $array = [
                'name' => $data['nome']
            ];
            Grupo::where('id', $id)->update($array);

            return [ 'status' => true, 'message'=>"Update realizado com sucesso."];
        } catch (Exception $error) {
            return ['status' => false, "message" => "Houve um error ao editar esse cadastro."];
        }
    }
}
