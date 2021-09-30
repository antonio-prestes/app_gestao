<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['title' => 'Contato', 'motivo_contatos' => $motivo_contatos]);

    }

    public function salvar(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|min:3|max:200'
        ];
        $feedback = [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O nome precisa ter no minimo 3 caracteres',
            'nome.max' => 'O nome pode ter no máximo 40 caracteres',

            'telefone.required' => 'O campo telefone precisa ser preenchido',
            'email.email' => 'Insira um e-mail válido',
            'motivo_contatos_id' => 'O campo motivo de contato precisa ser preenchido',

            'mensagem.required' => 'O campo mensagem precisa ser peenchido',
            'mensagem.min' => 'O campo mensagem precisa ter no minimo 3 caracteres',
            'mensagem.max' => ' O campo mensagem pode ter no máximo 200 caracteres'
        ];

        $request->validate($regras,$feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
