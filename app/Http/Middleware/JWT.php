<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use JWTAuth;
    use Exception;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JWT extends BaseMiddleware
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
        try {
            $user = JWTAuth::parseToken()->authenticate();
            Log::info(["user" => $user->id]);
            $request->user = User::find($user->id);
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json(['message' => 'El token es inválido, inicie sesión nuevamente'], 401);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json(['message' => 'El token ha expirado, inicie sesión nuevamente'], 401);
            }else{
                return response()->json(['message' => 'La petición no tiene cabecera de autorización'], 401);
            }
        }
        return $next($request);
    }
}
