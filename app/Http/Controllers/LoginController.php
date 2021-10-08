<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = '';

        if ($request->get('erro')==1){
            $erro = 'Usuário ou senha incorreta';
        }

        return view('site.login',['title'=>'Login', 'erro'=>$erro]);
    }

    public function auth(Request $request){

        $regras =[
            'user'=>'email',
            'password'=>'required'
        ];
        $feedback =[
            'user.email'=>'Campo usuário (e-mail) é obrigatório',
            'password.required'=>'O campo senha é obrigatorio'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('user');
        $password = $request->get('password');

        $user = new User();
        $userExists = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($userExists->name)){
            echo 'Usuário existe';
        } else {
            return redirect()->route('site.login', ['erro'=>1]);
        }


    }
}
