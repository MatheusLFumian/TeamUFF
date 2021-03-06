<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Signin
     */
    public function signin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        var_dump($data); die();

        if (Auth::attempt($data)) {
            $user = $request->user();
            $data['token'] = $user->createToken('token')->acessToken;
            return response()->json($data, 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    /**
     * Signup
     */
    public function signup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('token')->accessToken;

        return response()->json(['token' => $token], 200);
    }
}
