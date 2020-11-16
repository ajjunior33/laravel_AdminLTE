<?php

namespace App\Http\Controllers;

use App\Models\Conexao;
use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Models\Usuarios;

class ConexaoController extends Controller
{
    public function index()
    {
        $grupos = Grupo::all();
        $conexoes = Conexao::all();
        return view("admin.conexoes", compact('grupos', 'conexoes'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        // [x] Verificar se usuario existe.
        $verifyUser = Usuarios::where(['login' => $data['usuario']])->count();

        if ($verifyUser > 0) {
            // [x] Verificar se usuarios já tem uma conexão.
            $verifyGroup = Grupo::where(['id' => $data['group']])->count();

            if ($verifyGroup > 0) {
                // [x] Verificar se conexão existe.
                $verifyUserConnection = Conexao::where(['usuario' => $data['usuario']])->count();
                if ($verifyUserConnection > 0) {
                    return ['status' => false, 'message' => "Esse usuario já tem uma conexão atrelada."];
                } else {
                    Conexao::create(['usuario' => $data['usuario'], 'grupo_id' => $data['group']]);
                    return ['status' => true, 'message' => "Conexão atrelada com sucesso."];
                }
            } else {
                return ['status' => false, 'message' => "Grupo não econtrado."];
            }
        } else {

            return ['status' => false, 'message' => "Não encontrei esse usuario."];
        }
        return ['status' => false, 'message' => "Usuario não econtrado."];
    }
}
