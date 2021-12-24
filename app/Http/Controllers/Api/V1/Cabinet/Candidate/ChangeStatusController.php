<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Candidate;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class ChangeStatusController extends Controller
{
    public $user;

    public function action()
    {
        $this->user = JWTAuth::user();

        if ($this->user) {

            try {
                DB::transaction(function () {
                    $this->updateUserStatus();
                });
            } catch (\Exception $e) {
                return response(['errors' => ['server' => 'Произошла ошибка обновлении.']], 500);
            }

            return response(['success' => 'Статус успешно изменён.']);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }

    private function deleteSearchingItem(){
        $searchingConsultant = $this->user->inSearchConsultant;

        if ($searchingConsultant){
            $searchingConsultant->delete();
        }
    }

    private function updateUserStatus(){
        $candidateInfo = $this->user->candidateInfo;

        if ($candidateInfo) {
            switch ($candidateInfo->is_search){
                case 0:{
                    $this->updateSearchingItem();
                    break;
                }
                case 1:{
                    $this->deleteSearchingItem();
                    break;
                }
            }

            $candidateInfo->is_search = $candidateInfo->is_search == 0 ? 1 : 0;
            $candidateInfo->save();
        }
    }

    private function updateSearchingItem(){
        $searchingConsultant = $this->user->inSearchConsultant->withTrashed();

        if ($searchingConsultant){
            $searchingConsultant->restore();
        }
    }
}
