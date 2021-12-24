<?php

namespace App\Http\Resources\Cabinet\Resume;

use Illuminate\Http\Resources\Json\JsonResource;

class IndexCandidateResource extends JsonResource
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
            'city' => $this->candidateInfo->city,
            'region' => $this->candidateInfo->region,
            'prof_field' => $this->candidateInfo->prof_field,
            'desired_post' => $this->candidateInfo->desired_post,
            'desired_salary' => $this->candidateInfo->desired_salary,
            'search_region' => $this->candidateInfo->search_region,
            'search_industry' => $this->candidateInfo->search_industry,
            'img' => $this->img,
            'edu_list' => $this->education,
            'exp_list' => $this->experience,
        ];

        if ($this->candidateInfo->tag == 3)
            $data['search_region'] = $this->candidateInfo->search_region;
        else if ($this->candidateInfo->tag == 4)
            $data['search_industry'] = $this->candidateInfo->search_industry;
        else if ($this->candidateInfo->tag == 6){
            $data['search_region'] = $this->candidateInfo->search_region;
            $data['search_industry'] = $this->candidateInfo->search_industry;
        }

        return $data;
    }
}
