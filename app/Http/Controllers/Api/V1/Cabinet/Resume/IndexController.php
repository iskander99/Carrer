<?php

namespace App\Http\Controllers\Api\v1\Cabinet\Resume;

use App\Http\Resources\Cabinet\Resume\IndexCandidateResource;
use App\Http\Resources\Cabinet\Resume\IndexConsultantResource;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;


class IndexController extends Controller
{
    public $user;

    public function action()
    {
        $this->user = JWTAuth::user();

        if ($this->user){
            return $this->defineUser();
        }else{
            return response(['errors' => ['user' => 'Пользователь не найден']], 404);
        }
    }

    private function defineUser()
    {
        $educationInfo = $this->user->education;
        $experienceInfo = $this->user->experience;

        if ($this->user->role == 1) {
            $candidateInfo = $this->user->candidateInfo;

            return new IndexCandidateResource($this->user);

        }else if ($this->user->role == 2){
            $consultantInfo = $this->user->consultantInfo;
            $region = $this->user->consultantInfo->region;
            $industry = $this->user->consultantInfo->industry;

            return new IndexConsultantResource($this->user);
        }
    }

}

