<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\LoginResource;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    //
    public function login(LoginRequest $request){
        $user = User::where('username', $request->username)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'data salah h3h3h3'
            ], 401);
        }

        $token = $user->createToken('token')->plainTextToken;
        
        return new LoginResource([
            'message' => 'validasi berhasil',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();

        return response()->noContent();
    }

    public function register(RegisterRequest $request){
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('token')->plainTextToken;
        
        return new LoginResource([
            'message' => 'validasi berhasil',
            'user' => $user,
            'token' => $token,
        ], 200);
    }
}
