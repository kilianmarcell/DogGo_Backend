<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only(['username', 'password']);
        if (Auth::once($credentials)) {
            $token = Auth::user()->createToken('apitoken');
            return response()->json(['token' => $token->plainTextToken]);
        } else {
            return response()->json(['message' => 'Helytelen felhasználónév vagy jelszó']);
        }
    }

    public function me(Request $request) {
        Auth::user();
    }
}
