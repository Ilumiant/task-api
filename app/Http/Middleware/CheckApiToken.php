<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckApiToken
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
        $header = $request->header('Authorization');

        if(!empty(trim($request->header('Authorization')))){

            $is_exists = User::where('id' , Auth::guard('api')->id())->exists();
            if($is_exists){
                return $next($request);
            }
            return response()->json([
                'message' => 'El token proporcionado es inválido'
            ], 401);
        }

        return response()->json([
            'message' => 'El recurso al que está intentando acceder está protegido, debe iniciar sesión'
        ], 401);
    }
}
