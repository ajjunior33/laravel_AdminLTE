<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Exception;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuarios::all();
        return view('users.listUsers', compact('usuarios'));
    }


    public function store(Request $request)
    {
        try {
            $dados = $request->all();
            $data = [
                'name' => $dados['full_name'],
                'email' => $dados['email'],
                'login' => $dados['login'],
                'password' => $dados['password']
            ];
            $verify = Usuarios::where(['login' => $data['login']])->count();
            if ($verify > 0) {
                return ['status' => false, 'message' => "Usuario já cadastrado."];
            }
            Usuarios::create($data);
            return ['status' => true, 'message' => "Usuario criado com sucesso."];
        } catch (Exception $error) {

            return ['status' => false, 'message' => "Houve um erro ao executar essa funcionalidade."];
        }
    }
    public function new_user()
    {
        return view('admin.newUser');
    }
}
