<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function register(Request $request) {
        if(!$request->name || !$request->email || !$request->password) {
            return response()->json(["error" => "name, email, and password are required to register"], 400);
        }

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        $token = $user->createToken("LaravelRestApi")->accessToken;

        return response()->json(
            [
                "data" => [
                    "type" => "activities",
                    "message" => "Success",
                    "data" => $token,
                ],
            ],
            200
        );
    }

    public function login(Request $request) {
        $data = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();
            $token = $user->createToken("LaravelRestApi")->accessToken;
            return response()->json(["token" => $token], 200);
        } else {
            return response()->json(["error" => "Unauthorized"], 401);
        }
    }
}
