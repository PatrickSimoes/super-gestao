<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $methodoAutenticacao, $perfil): Response
    {
        echo("$methodoAutenticacao e $perfil<br>");

        if($methodoAutenticacao == 'padrao') {
            echo('tem acesso<br>');
        }else {
            echo('pede acesso<br>');
        }

        if($perfil == 'gerente') {
            echo('Acesso de Gente<br>');
        }else {
            echo('trampa ae nego<br>');
        }

        if(false) {
            return $next($request);;
        } else {
            
            return Response('Precisa de Autenticação');
        }
    }
}
