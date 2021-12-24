<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant;

use App\Models\FuncMailing;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class BuyMailingController extends Controller
{
    public $user;
    public $request;
    public $data = [];

    public function action(Request $request)
    {
        $this->request = $request;
        $this->isValid();

        $this->user = JWTAuth::user();

        if ($this->user) {
            FuncMailing::create([
                    'user_id' => $this->user->id,
                    'income_level' => $request->income_level == 0 ? null : $request->income_level,
                    'structure_level' => $request->structure_level == 0 ? null : $request->structure_level,
                    'func_direction' => $request->func_direction == 0 ? null : $request->func_direction,
                    'industry' => $request->industry == 0 ? null : $request->industry,
                    'region' => $request->region == 0 ? null : $request->region
                ]);

            return response(['success' => 'Успешно создано.']);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }


    private function isValid()
    {
        $this->request->validate([
            'tag' => 'required|integer|min:1|max:19',
            'income_level' => 'required|integer',
            'structure_level' => 'required|integer',
            'func_direction' => 'required|integer',
            'industry' => 'required|integer',
            'region' => 'required|integer'
        ]);
    }
}
