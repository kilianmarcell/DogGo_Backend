<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only(['email', 'password']);
        if (Auth::once($credentials)) {
            $token = Auth::user()->createToken('apitoken');
            return response()->json(Auth::user());
        } else {
            return response()->json(['message' => 'Invalid email or password']);
        }
    }
}
