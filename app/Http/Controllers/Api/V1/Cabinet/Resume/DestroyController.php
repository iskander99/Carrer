<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Resume;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class DestroyController extends Controller
{
    public function action()
    {
        $user = JWTAuth::user();

        if ($user){
            $user->delete();
            //JWTAuth::invalidate($user->token);
            return response(['success' => 'Пользователь был успешно удалён.']);
        }else{
            return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
        }
    }
}
