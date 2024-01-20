<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "O id $id, acessou pela Rota $rota"]);
        
        $resposta = $next($request);

        $resposta->setStatusCode('201', 'Tudo foi modificado');

        return $resposta;
    }
}
