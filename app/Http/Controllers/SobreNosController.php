<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    function sobre(){
        return view('site.sobre',['title'=>'Sobre']);
    }
}
