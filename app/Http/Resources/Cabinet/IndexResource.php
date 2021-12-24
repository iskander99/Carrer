<?php

namespace App\Http\Resources\Cabinet;

use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{

    const CANDIDATE = 1;
    const CONSULTANT = 2;

    public function toArray($request)
    {
        return $this->defineRole();
    }

    private function defineRole(){
        $base = [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'img' => $this->img,
                'role' => $this->role
            ];

        if ($this->role == self::CANDIDATE){
            $base = array_merge($base, $this->getCandidateData());
        }else if ($this->role == self::CONSULTANT){
            $base = array_merge($base, $this->getConsultantData());
        }

        return $base;
    }

    private function getConsultantData(){
        return [
            'work_place' => $this->consultantInfo->work_place,
            'balance' => $this->consultantInfo->balance,
            'is_selection' => $this->inSearchCandidate ? 1 : 0,
            'new_candidates' => $this->candConsConnectionForConsultant
        ];
    }

    private function getCandidateData(){
        return [
            'tag' => $this->candidateInfo->tag,
            'is_search' => $this->candidateInfo->is_search,
            'is_selection' => $this->inSearchConsultant ? 1 : 0,
            'new_consultants' => $this->candConsConnectionForCandidate
        ];
    }
}
