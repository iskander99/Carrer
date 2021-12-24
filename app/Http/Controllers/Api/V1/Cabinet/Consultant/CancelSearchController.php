<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant;

use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class CancelSearchController extends Controller
{
    public function action(){
        $user = JWTAuth::user();

        if ($user){
            if ($inSearchCandidate = $user->inSearchCandidate){
                $inSearchCandidate->delete();
                //return money back
                return response(['success' => 'Успешно удалено.']);
            }
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }
}
