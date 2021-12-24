<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Requests\Api\Auth\SignupRequest;
use App\Models\ConsultationInfoIndustry;
use App\Models\ConsultationInfoRegion;
use App\Models\SearchConsultant;
use App\Models\User;
use App\Models\UserCandidateInfo;
use App\Models\UserConsultationInfo;
use App\Models\UserEducation;
use App\Models\UserExperience;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;
use Tymon\JWTAuth\Facades\JWTAuth;

class SignupController extends Controller
{
    private const CANDIDATE = 1;
    private const CONSULTANT = 2;
    private $data;
    private $userId;

    public function action(Request $request)
    {
        $this->data = SignupRequest::isValid($request);
        //if ($this->addPhoto($request)) {
            try {
                DB::transaction(function () {
                    $this->addUser();
                    $this->addUserEducation();
                    $this->addConsultationInfo();
                    $this->addCandidateInfo();
                    $this->addUserExperience();
                    $this->addSearchConsultant();
                });

            } catch (\Exception $e) {
                $this->deleteImage();
                return response(['errors' => ['server' => 'Произошла ошибка при регистрации']], 500);
            }

            return response([
                'success' => 'Пользователь успешно зарегистрирован',
                'data' => ['access_token' => $this->login($request)]
            ]);
//        }else{
//            return response(['errors' => ['img' => 'Произошла ошибка при загрузке изображения']], 422);
//        }
    }

    private function deleteImage(){
        if (Storage::disk('public')->exists('/images/'.$this->data['img']))
            Storage::disk('public')->delete('/images/'.$this->data['img']);
    }

    private function addUser(){
        $this->setHashPassword();

        $user = User::create($this->data);
        $this->userId = $user['id'];
    }

    private function login($request){
        return JWTAuth::attempt($request->only('email', 'password'));
    }

    private function setHashPassword(){
        $this->data['password'] = Hash::make($this->data['password']);
    }

    private function addPhoto(Request $request){
        $img = $request->file('img')->store('public/images');
        $this->data['img'] = $request->file('img')->hashName();

        return $img;
    }

    private function addUserEducation(){
        foreach ($this->data['edu_list'] as $item){
            $item['user_id'] = $this->userId;
            UserEducation::create($item);
        }
    }

    private function addUserExperience(){
        if (!empty($this->data['exp_list'])) {
            foreach ($this->data['exp_list'] as $item) {
                $item['user_id'] = $this->userId;
                UserExperience::create($item);
            }
        }
    }

    private function addConsultationInfo(){
        if ($this->data['role'] == self::CONSULTANT){
            $info = UserConsultationInfo::create(
                [
                    'user_id' => $this->userId,
                    'work_place' => $this->data['work_place'],
                    'is_incognito' => $this->data['is_incognito'],
                    'work_mode' => $this->data['work_mode'],
                    'prof_achievements' => $this->data['prof_achievements']
                ]
            );

            $this->addConsultationInfoRegion($info['id']);
            $this->addConsultationInfoIndustry($info['id']);
        }
    }

    private function addCandidateInfo(){
        if ($this->data['role'] == self::CANDIDATE){

            UserCandidateInfo::create([
                'user_id' => $this->userId,
                'region' => $this->data['region'],
                'city' => $this->data['city'],
                'prof_field' => $this->data['prof_field'],
                'desired_post' => $this->data['desired_post'],
                'desired_salary' => $this->data['desired_salary'],
                'search_region' => $this->data['search_region'] ?? null,
                'search_industry' => $this->data['search_industry'] ?? null
            ]);

        }
    }

    private function addSearchConsultant(){
        if ($this->data['role'] == self::CANDIDATE){
            SearchConsultant::create(['user_id' => $this->userId, 'tag' => 1]);
        }
    }

    private function addConsultationInfoIndustry($infoId){
        foreach ($this->data['industries_list'] as $item) {
            $item['user_consultation_info_id'] = $infoId;
            ConsultationInfoIndustry::create($item);
        }
    }

    private function addConsultationInfoRegion($infoId){
        foreach ($this->data['regions_list'] as $item) {
            $item['user_consultation_info_id'] = $infoId;
            ConsultationInfoRegion::create($item);
        }
    }





}
