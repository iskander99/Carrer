<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Requests\Api\Auth\LoginRequest;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;


class LoginController extends Controller
{
    public function action(LoginRequest $request)
    {
        $data = $request->validated();

        if($token = JWTAuth::attempt($data)){

            return response([
                'success' => 'Вы успешно авторизовались.',
                'data' =>
                    ['access_token' => $token]
                ]
            );
        }

        return response()->json(['errors' => ['login' => 'Неправильный логин или пароль.']], 401);
    }
}
