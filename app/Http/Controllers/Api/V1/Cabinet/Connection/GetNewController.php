<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Connection;

use App\Models\User;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class GetNewController extends Controller
{
    const NEW = 0;

    public function action(){
        $user = JWTAuth::user();

        if ($user) {
            switch ($user->role){
                case 1:{
                    $newConnection = $user->candConsConnectionForCandidate->candidateNew;
                    //$consultantInfo = User::find($newConnection[0]['cons_id'])->select('phone')->get();
                    return $newConnection;
                    break;
                }
                case 2:{
                    $newConnection = $user->candConsConnectionForConsultant()->where('status', self::NEW)->get();
                    break;
                }
            }

            return response(['data' => $newConnection]);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }
}
