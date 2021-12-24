<?php

namespace App\Http\Controllers\Api\v1\Cabinet;

use App\Http\Resources\Cabinet\IndexResource;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;


class IndexController extends Controller
{
    public function action()
    {
        $user = JWTAuth::user();

        if ($user){
            if ($user->role == 1){
                $info = $user->candidateInfo;
                $inSearchConsultant = $user->inSearchConsultant;
                $newConsultants = $user->candConsConnectionForCandidate()->where('status', 0);
            }elseif ($user->role == 2){
                $info = $user->consultantInfo;
                $inSearchCandidate = $user->inSearchCandidate;
                $newCandidates = $user->candConsConnectionForConsultant()->where('status', 0);
            }

            return new IndexResource($user);
        }

        return response(['error' => ['user' => 'Пользователь не найден']], 404);
    }
}
