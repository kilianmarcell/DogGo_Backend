<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserCountController extends Controller
{
    public function getUserCount() {
        $userCount = User::where('users.permission', '!=', '1')->count();
             return response()->json($userCount);
    }

    public function getBannedUserCount() {
        $userCount = User::where('users.permission', '=', '1')->count();
             return response()->json($userCount);
    }

    public function getAdminUserCount() {
        $userCount = User::where('users.permission', '>=', '2')->count();
             return response()->json($userCount);
    }
}