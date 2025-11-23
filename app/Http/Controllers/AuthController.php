<?php

namespace App\Http\Controllers;

use App\Applications\UserApplication;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        $data = UserApplication::create($request->validated());
        return response()->json($data, 201);
    }

    public function login(LoginRequest $request)
    {
        $data = UserApplication::login($request->validated());
        return response()->json($data);
    }

    public function logout(Request $request)
    {
        UserApplication::logout($request->user());
        return response()->json(['message' => 'Logged out successfully']);
    }
}
