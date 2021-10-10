<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Usuário ou senha incorreta';
        }

        if ($request->get('erro') == 2) {
            $erro = 'Nessesário realizar login para ter acesso a página';
        }

        return view('site.login', ['title' => 'Login', 'erro' => $erro]);
    }

    public function auth(Request $request)
    {

        $regras = [
            'user' => 'email',
            'password' => 'required'
        ];
        $feedback = [
            'user.email' => 'Campo usuário (e-mail) é obrigatório',
            'password.required' => 'O campo senha é obrigatorio'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('user');
        $password = $request->get('password');

        $user = new User();
        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)) {

            session_start();
            $_SESSION['name'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }


    }

    public function sair()
    {
        session_destroy();
        return redirect()->route('site.login');
    }
}
