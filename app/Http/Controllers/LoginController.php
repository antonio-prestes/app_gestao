<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login',['title'=>'Login']);
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


    }
}
