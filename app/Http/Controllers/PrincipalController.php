<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){
        return view('site.index',['title'=>'Home']);
    }
}
