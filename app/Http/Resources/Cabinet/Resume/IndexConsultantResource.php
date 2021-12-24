<?php

namespace App\Http\Resources\Cabinet\Resume;

use Illuminate\Http\Resources\Json\JsonResource;

class IndexConsultantResource extends JsonResource
{

    public function toArray($request)
    {
        $data = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'birth_day' => $this->birth_day,
            'citizenship' => $this->citizenship,
            'img' => $this->img,
            'work_place' => $this->consultantInfo->work_place,
            'is_incognito' => $this->consultantInfo->is_incognito,
            'work_mode' => $this->consultantInfo->work_mode,
            'region_list' => $this->consultantInfo->region,
            'industry_list' => $this->consultantInfo->industry,
            'prof_achievements' => $this->consultantInfo->prof_achievements,
            'edu_list' => $this->education,
            'exp_list' => $this->experience,
        ];

        return $data;
    }
}
