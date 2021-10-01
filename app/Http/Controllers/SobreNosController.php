<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    function sobre()
    {
        return view('site.sobre', ['title' => 'Sobre']);
    }
}
