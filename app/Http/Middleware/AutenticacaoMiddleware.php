<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Response;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao)
    {
        echo $metodo_autenticacao;
        if (false) {
            return $next($request);
        } else {
            return Response("Acesso negado!!");
        }


    }
}
