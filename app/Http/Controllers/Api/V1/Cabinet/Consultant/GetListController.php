<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant;

use App\Models\ExpectedSalaryLevelList;
use App\Models\FuncDirectionList;
use App\Models\IndustriesList;
use App\Models\RegionsList;
use App\Models\StructureLevelList;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GetListController extends Controller
{
    public $list = [];

    public function action(Request $request){
        $data = $request->validate(['tag' => 'required|integer']);

        switch ($data['tag']){
            case 11:{
                $this->list = ['func_direction_list' => FuncDirectionList::all()];
                break;
            }
            case 15:{
                $this->list = ['regions_list' => RegionsList::all()];
                break;
            }
            case 16:{
                $this->list = ['industries_list' => IndustriesList::all()];
                break;
            }
            case 17:{
                $this->list = [
                    'salary_level_list' => ExpectedSalaryLevelList::all(),
                    'structure_level_list' => StructureLevelList::all(['id', 'title']),
                    'func_direction_list' => FuncDirectionList::all(),
                    'regions_list' => RegionsList::all(),
                    'industries_list' => IndustriesList::all()
                ];
                break;
            }
        }

        return response(['data' => $this->list]);
    }
}
