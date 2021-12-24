<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Resume;

use App\Http\Requests\Api\Cabinet\Resume\UpdateRequest;
use App\Models\ConsultationInfoIndustry;
use App\Models\ConsultationInfoRegion;
use App\Models\UserEducation;
use App\Models\UserExperience;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdateController extends Controller
{
    public $user;
    public $candidateInfo;
    public $data;

    public function action(Request $request)
    {
        $this->user = JWTAuth::user();

        if ($this->user) {

            $this->getCandidateTag();

            $this->data = UpdateRequest::isValid($request, $this->user, $this->candidateInfo->tag ?? 0);

            try {
                DB::transaction(function () use ($request) {

                    if ($this->user->role == 1) {
                        $this->updateCandidate($request);
                    } else if ($this->user->role == 2) {
                        $this->updateConsultant($request);
                    }

                    $this->addElements();
                    $this->deleteElements();

                    return response(['success' => 'Данные успешно обновлены.']);
                });
            } catch (\Exception $e) {
                return response(['errors' => ['server' => 'Произошла ошибка.']], 500);
            }
        } else {
            return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
        }

    }

    private function updateConsultant($request){
        $this->updateUser($request);

        $consultant = $this->user->consultantInfo;
        $consultant->work_place = $request->work_place;
        $consultant->is_incognito = $request->is_incognito;
        $consultant->work_mode = $request->work_mode;
        $consultant->prof_achievements = $request->prof_achievements;
        $consultant->save();

        $this->addElementsConsultant($consultant->id);
        $this->delElementConsultant();
    }

    private function updateCandidate($request){
        $this->updateUser($request);

        $this->candidateInfo->city = $request->city;
        $this->candidateInfo->region = $request->region;
        $this->candidateInfo->prof_field = $request->prof_field;
        $this->candidateInfo->desired_post = $request->desired_post;
        $this->candidateInfo->desired_salary = $request->desired_salary;

        if ($this->candidateInfo->tag == 3){
            $this->candidateInfo->search_region = $request->search_region;
        }else if ($this->candidateInfo->tag == 4){
            $this->candidateInfo->search_industry = $request->search_industry;
        }else if ($this->candidateInfo->tag == 6){
            $this->candidateInfo->search_region = $request->search_region;
            $this->candidateInfo->search_industry = $request->search_industry;
        }

        $this->candidateInfo->save();
    }

    private function updateUser($request){
        $this->user->first_name = $request->first_name;
        $this->user->last_name = $request->last_name;
        $this->user->phone = $request->phone;
        $this->user->email = $request->email;
        $this->user->birth_day = $request->birth_day;
        $this->user->citizenship = $request->citizenship;
        if ($img = $this->updateImage($request) !== null) $this->user->img = $img;
        if ($request->password) $this->user->password = Hash::make($request->password);
        $this->user->save();
    }

    private function getCandidateTag(){
        if ($this->user && $this->user->role == 1){
            $this->candidateInfo = $this->user->candidateInfo;
        }
    }

    private function deleteElements(){
        if (!empty($this->data['del_exp_list'])) {
            foreach ($this->data['del_exp_list'] as $item){
                if ($item['id']){
                    $el = UserExperience::find($item['id']);
                    if ($el) $el->delete();
                }
            }
        }

        if (!empty($this->data['del_edu_list'])) {
            foreach ($this->data['del_edu_list'] as $item){
                if ($item['id']){
                    $el = UserEducation::find($item['id']);
                    if ($el) $el->delete();
                }
            }
        }
    }

    private function delElementConsultant(){
        if (!empty($this->data['del_regions_list'])) {
            foreach ($this->data['del_regions_list'] as $item){
                if ($item['id']){
                    $el = ConsultationInfoRegion::find($item['id']);
                    if ($el) $el->delete();
                }
            }
        }

        if (!empty($this->data['del_industries_list'])) {
            foreach ($this->data['del_industries_list'] as $item){
                if ($item['id']){
                    $el = ConsultationInfoIndustry::find($item['id']);
                    if ($el) $el->delete();
                }
            }
        }
    }

    private function addElementsConsultant($consultantInfoId){
        if (!empty($this->data['add_regions_list'])) {
            foreach ($this->data['add_regions_list'] as $item){
                if ($item['id']){
                    $item['user_consultation_info_id'] = $consultantInfoId->id;
                    ConsultationInfoRegion::create($item);
                }
            }
        }

        if (!empty($this->data['add_industries_list'])) {
            foreach ($this->data['add_industries_list'] as $item){
                if ($item['id']){
                    $item['user_consultation_info_id'] = $consultantInfoId->id;
                    ConsultationInfoIndustry::create($item);
                }
            }
        }
    }


    private function addElements(){
        if (!empty($this->data['add_exp_list'])) {
            foreach ($this->data['add_exp_list'] as $item){
                $item['user_id'] = $this->user->id;
                UserExperience::create($item);
            }
        }

        if (!empty($this->data['add_edu_list'])) {
            foreach ($this->data['add_edu_list'] as $item){
                $item['user_id'] = $this->user->id;
                UserEducation::create($item);
            }
        }
    }


    private function updateImage($request){
        if ($request->file('img')) {
            $request->file('img')->store('public/images');
            return $request->file('img')->hashName();
        }

        return null;
    }
}
