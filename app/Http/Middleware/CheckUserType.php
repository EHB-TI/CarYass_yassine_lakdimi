<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $userType)
    {
        if (auth()->check()) {
            if (auth()->user()->typeUser == '0' && $userType == 'user') {
                // L'utilisateur est de type 'user', continue vers la route suivante
                return $next($request);
            } elseif (auth()->user()->typeUser == '1' && $userType == 'admin') {
                // L'utilisateur est de type 'admin', continue vers la route suivante
                return $next($request);
            }
        }

        // Si l'utilisateur n'est pas authentifié ou n'a pas le bon type, redirige vers la page d'accueil
        return redirect('/');
    }
}
