<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Candidate;

use App\Models\SearchConsultant;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class ChangeTypeController extends Controller
{
    private const TOP100_CONS = 2;
    private const REGION_CONS = 3;
    private const INDUSTRY_CONS = 4;

    private $user;
    private $request;
    private $data = [];

    public function action(Request $request)
    {
        $this->request = $request;
        $this->isValid();

        $this->user = JWTAuth::user();

        if ($this->user) {

            if ($request->tag == self::TOP100_CONS && isset($request->cons_from_top_id)) {
                $this->data = [
                    'cons_from_top_id' => $request->cons_from_top_id,
                    'cons_from_top_price' => $request->cand_from_top_price,
                ];
            } else if ($request->tag == self::REGION_CONS) {
                $this->data = ['search_region' => $request->search_region];
            } else if ($request->tag == self::INDUSTRY_CONS) {
                $this->data = ['search_industry' => $request->search_industry];
            }

            //check has active consultant

            try {
                DB::transaction(function () {
                    $this->updateSearchingItem();
                    $this->updateUserTag();
                });
            } catch (\Exception $e) {
                return response(['errors' => ['server' => 'Произошла ошибка при регистрации']], 500);
            }

            return response(['success' => 'Тип успешно изменён.']);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }

    private function isValid()
    {
        $rules = [];

        $this->request->validate([
            'tag' => 'required|integer|min:1|max:6'
        ]);

        if ($this->request->tag == self::TOP100_CONS) {
            $rules = [
                'cons_from_top_id' => 'integer',
                'cons_from_top_price' => 'integer'
            ];
        } else if ($this->request->tag == self::REGION_CONS) {
            $rules = ['search_region' => 'required|integer'];
        } else if ($this->request->tag == self::INDUSTRY_CONS) {
            $rules = ['search_industry' => 'required|integer'];
        }

        $this->request->validate($rules);

    }

    private function updateSearchingItem(){
        $searchingConsultant = $this->user->inSearchConsultant;

        if ($searchingConsultant){
            $searchingConsultant->update(
                [
                    'user_id' => $this->user->id,
                    'tag' => $this->request->tag,
                    'search_region' => $this->getData('search_region', null),
                    'search_industry' => $this->getData('search_industry', null),
                    'cons_from_top_id' => $this->getData('cons_from_top_id', null),
                    'cons_from_top_price' => $this->getData('cons_from_top_price', 0),
                ]
            );
        }else{
            $this->addSearchConsultant();
        }
    }

    private function updateUserTag(){
        $candidateInfo = $this->user->candidateInfo;
        $candidateInfo->tag = $this->request->tag;
        $candidateInfo->save();
    }

    private function addSearchConsultant(){
        SearchConsultant::create(array_merge(['user_id' => $this->user->id, 'tag' => $this->request->tag], $this->data));
    }

    private function getData($name, $ifFalse){
        return array_key_exists($name, $this->data) ? $this->request[$name] : $ifFalse;
    }

}
