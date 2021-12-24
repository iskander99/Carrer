<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant;

use App\Models\SearchCandidate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class BuyCandidateController extends Controller
{
    private $request;
    private $data = [];

    private const FUNC_DIRECTION = 11;
    private const REGION = 15;
    private const INDUSTRY = 16;

    public function action(Request $request)
    {
        $this->request = $request;
        $this->isValid();

        $user = JWTAuth::user();

        if ($user) {
            // check top and vip
            if ($this->request->tag == self::REGION) {
                $this->data = ['search_region' => $this->request->search_region];
            } else if ($this->request->tag == self::INDUSTRY) {
                $this->data = ['search_industry' => $this->request->search_industry];
            } else if ($this->request->tag == self::FUNC_DIRECTION) {
                $this->data = ['func_direction' => $this->request->func_direction];
            }

            SearchCandidate::create(
                array_merge(
                    ['user_id' => $user->id, 'tag' => $this->request->tag],
                    $this->data
                )
            );

            return response(['success' => 'Заявка успешно отправлена.']);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }

    private function isValid()
    {
        $rules = [];

        $this->request->validate([
            'tag' => 'required|integer|min:1|max:19'
        ]);

        if ($this->request->tag == self::REGION) {
            $rules = ['search_region' => 'required|integer'];
        } else if ($this->request->tag == self::INDUSTRY) {
            $rules = ['search_industry' => 'required|integer'];
        } else if ($this->request->tag == self::FUNC_DIRECTION) {
            $rules = ['func_direction' => 'required|integer'];
        }

        $this->request->validate($rules);

    }
}
