<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Connection;

use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class GetInWorkController extends Controller
{
    const IN_WORK = 1;

    public function action(){
        $user = JWTAuth::user();

        if ($user) {
            switch ($user->role){
                case 1:{
                    $newConnection = $user->candConsConnectionForCandidate()->where('status', self::IN_WORK)->get();
                    break;
                }
                case 2:{
                    $newConnection = $user->candConsConnectionForConsultant()->where('status', self::IN_WORK)->get();
                    break;
                }
            }

            return response(['data' => $newConnection]);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }
}
