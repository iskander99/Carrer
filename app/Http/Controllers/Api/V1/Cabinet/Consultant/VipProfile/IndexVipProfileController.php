<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant\VipProfile;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class IndexVipProfileController extends Controller
{
    public function action(){
        $user = JWTAuth::user();

        if ($user){
            $vipProfile = $user->vipProfile;
            if ($vipProfile){
                $vipProfileFile = $vipProfile->docs;

                return response(['data' => $vipProfile]);
            }
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }
}
