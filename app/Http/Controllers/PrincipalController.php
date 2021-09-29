<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){

        $motivo_contatos = MotivoContato::all();

        return view('site.index',['title'=>'Home','motivo_contatos'=>$motivo_contatos]);
    }
}
