<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Connection;


use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class GetFinishedController extends Controller
{
    const FINISHED = 2;

    public function action(){
        $user = JWTAuth::user();

        if ($user) {
            switch ($user->role){
                case 1:{
                    $newConnection = $user->candConsConnectionForCandidate()->where('status', self::FINISHED)->get();
                    break;
                }
                case 2:{
                    $newConnection = $user->candConsConnectionForConsultant()->where('status', self::FINISHED)->get();
                    break;
                }
            }

            return response(['data' => $newConnection]);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }
}
