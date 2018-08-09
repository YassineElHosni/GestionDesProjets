<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->Auth_hasRole('ADMIN')==true){
        return $next($request);/*u may continue ur next request*/
      }else{
        return response("Permission non accordé",401);/*on doit éviter cette reponse*/
      }
    }
}
