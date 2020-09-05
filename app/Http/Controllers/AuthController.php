<?php

namespace App\Http\Controllers;
use App\User;
use App\Invitation;
use Carbon\Carbon;
use Carbon\CarbonTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    public function signup(Request $request, $token)
    {
        $request->validate([
            'email'    => 'required|string|email|unique:users,email,NULL,id,deleted_at,NULL',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($invitation = Invitation::where('token', $token)->first()) {
            if ($invitation->email == $request->input("email")) {
                $user = new User([
                    'email'    => $request->email,
                    'password' => bcrypt($request->password),
                    'role_id' => $invitation->role_id
                ]);
                $user->save();
                $invitation->delete();
                return response()->json(['message' => 'Usuario creado satisfactoriamente!'], 201);
            }
            return Response::json([
                'message' => "Acceso prohibido",
                'error' => 'El email introducido para este token no es válido'
            ], 403);
        }
        return Response::json([
            'message' => "Recurso no encontrado",
            'error' => 'El token ingresado no existe',
            "token" => $token
        ], 404);
        
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'       => 'required|string|email',
            'password'    => 'required|string|min:6',
            'remember_me' => 'boolean',
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'], 401);
        }
        $user = $request->user();
        $user->role;
        $user->vehicle;

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        // if ($request->remember_me) {
            // $token->expires_at = Carbon::now()->addWeeks(1);
            $token->expires_at = new Carbon('tomorrow');
        // }
        $token->save();
        return response()->json([
            'user' => $user,
            'access_token' => $tokenResult->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => Carbon::parse(
                $tokenResult->token->expires_at)
                    ->toDateTimeString(),
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 
            'Sesión cerrada satisfactoriamente']);
    }

    public function user(Request $request)
    {
        $user = $request->user();
        $user->role;
        return response()->json($user);
    }
}