<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Mail\ResetPasswdMail;
use App\Models\EduLevelList;
use App\Models\FuncDirectionList;
use App\Models\IndustriesList;
use App\Models\ProfFieldsList;
use App\Models\RegionsList;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Testing\Fluent\Concerns\Has;

class GetBeginDataController extends Controller
{
    private $beginData;

    public function action(Request $request)
    {
        $data = $request->validate(['role' => 'required|integer']);

        if ($data['role'] == 1){


            $this->beginData = [
                'data' => [
                    'regions_list' => RegionsList::all(),
                    'industries_list' => IndustriesList::all(),
                    'edu_level_list' => EduLevelList::all()
                ]
            ];
        }else if ($data['role'] == 2){
            $this->beginData = [
                'data' => [
                    'regions_list' => RegionsList::all(),
                    'prof_field_list' => ProfFieldsList::all(),
                    'func_direction_list' => FuncDirectionList::all()
                ]
            ];
        }

        return $this->beginData;

    }
}
