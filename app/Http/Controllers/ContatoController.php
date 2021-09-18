<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    function contato(){
        return view('site.contato',['title'=>'Contato']);
    }
}
