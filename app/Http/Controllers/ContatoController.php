<?php

namespace App\Http\Controllers;

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

        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();

        return view('site.contato',['title'=>'Contato']);

    }
}
