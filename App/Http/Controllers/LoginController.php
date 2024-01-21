<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        $erro = ''; 
        
        if($request->get('erro') == 1) {
            $erro = 'Senha incorreta, a correta seria 1234';
        }

        if($request->get('erro') == 2) {
            $erro = 'É necessario realizar o Login para ter acesso a página!';
        }

        return view('site.login', ['titulo' =>  'login', 'erro' => $erro]);
    }

    public function autenticar(Request $request) {
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];
        $feedback = [
            'usuario.email' => 'O campo precisa ser um E-mail',
            'senha.required' => 'O campo precisa ser preenchido'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = New User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();


        if(isset($usuario)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            $_SESSION['senha'] = $usuario->password;

            return redirect()->route('app.home');
        }else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair() {
        session_destroy();
        return redirect()->route('site.index');
    }
}
