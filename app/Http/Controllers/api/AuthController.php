<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required|string |max:30",
            'email' => "required|string|email|unique:users,email",
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                \Illuminate\Validation\Rules\Password::defaults()
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols() 
                ],
        ]);
        if($validator->fails()){
            return response()->json([
                'result' => false,
                'msg' => "Error de validación.",
                'data' => $validator->errors()
            ], 422);  
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Bienvenido ". $user->name . " a la platafora.",
            'data' => $user
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => "required|string",
            'password' => "required|string|min:8",
        ]);
        if($validator->fails()){
            return response()->json([
                'result' => false,
                'msg' => "Error de validación.",
                'data' => $validator->errors()
            ], 422);  
        }
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'result' => false,
                'msg' => "Credenciales incorrectas.",
                'data' => null
            ], 401);
        }
            
        $token = $request->user()->createToken($user->email);

        return response()->json([
            'result' => false,
            'msg' => "Inicio de sesión correcto.",
            'data' => $token
        ]);
    }

    public function aboutMe(Request $request)
    {
        $user = User::find($request->user()->id);
        if(!$user){
            return response()->json([
                'result' => false,
                'msg' => "Usuario innexistente.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Se ecnotraron tus datos " . $user->name . ".",
            'data' => $user
        ]);
    }

    public function logout(Request $request)
    {
        $user = User::find($request->user()->id);
        if(!$user){
            return response()->json([
                'result' => false,
                'msg' => "Usuario innexistente.",
                'data' => null
            ], 404);
        }

        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'result' => true,
            'msg' => "Hasta luego " . $user->name . ".",
            'data' => null
        ]);
    }
}
