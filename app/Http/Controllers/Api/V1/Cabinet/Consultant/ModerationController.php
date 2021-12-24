<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant;


use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class ModerationController extends Controller
{
    public function action(){
        $user = JWTAuth::user();

        if ($user) {
            $consultantInfo = $user->consultantInfo;

            return response([
                'data' => [
                    'f_moderation' => $consultantInfo->f_level_mod
                ]
            ]);

        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }
}
