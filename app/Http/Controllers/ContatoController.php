<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    function contato(Request $request){
        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        */

        //$contato = new SiteContato();
        //$contato->fill($request->all());
        //$contato->save();

        $motivo_contatos = MotivoContato::all();

        return view('site.contato',['title'=>'Contato', 'motivo_contatos'=>$motivo_contatos]);

    }

    public function salvar(Request $request){

        $request->validate([
            'nome'=>'required|min:3|max:40',
            'telefone'=>'required',
            'email'=>'required',
            'motivo_contato'=>'required',
            'mensagem'=>'required|min:3|max:40'
        ]);

        //SiteContato::create($request->all());
    }
}
