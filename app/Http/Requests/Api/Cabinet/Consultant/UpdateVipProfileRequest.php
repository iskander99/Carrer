<?php

namespace App\Http\Requests\Api\Cabinet\Consultant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateVipProfileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'is_q_1' => 'required|integer|min:0|max:1',
            'is_q_2' => 'required|integer|min:0|max:1',
            'is_q_3' => 'required|integer|min:0|max:1',
            'is_q_4' => 'required|integer|min:0|max:1',
            'is_q_5' => 'required|integer|min:0|max:1',
            'is_q_6' => 'required|integer|min:0|max:1',
            'is_q_7' => 'required|integer|min:0|max:1',
            'is_q_8' => 'required|integer|min:0|max:1',
            'is_q_9' => 'required|integer|min:0|max:1',
            'is_q_10' => 'required|integer|min:0|max:1',
            'is_q_11' => 'required|integer|min:0|max:1',
            'is_q_12' => 'required|integer|min:0|max:1',
            'is_q_13' => 'required|integer|min:0|max:1',
            'is_q_14' => 'required|integer|min:0|max:1',
            'is_q_15' => 'required|integer|min:0|max:1',
            'is_q_16' => 'required|integer|min:0|max:1',
            'is_q_17' => 'required|integer|min:0|max:1',
            'is_q_18' => 'required|integer|min:0|max:1',
            'is_q_19' => 'required|integer|min:0|max:1',

            'is_women_package' => 'required|integer|min:0|max:1',

            'c_1_top' => 'required|integer',
            'c_1_mid' => 'required|integer',
            'c_1_line' => 'required|integer',
            'c_1_spec' => 'required|integer',

            'c_2_comp' => 'required|integer',

            'c_3_hrd' => 'required|integer',

            'c_4_top' => 'required|integer',
            'c_4_mid' => 'required|integer',
            'c_4_line' => 'required|integer',
            'c_4_spec' => 'required|integer',

            'c_5_comp' => 'required|integer',
            'c_6_hrd' => 'required|integer',

            'link_1' => 'string|max:255|nullable',
            'link_2' => 'string|max:255|nullable',
            'link_3' => 'string|max:255|nullable',

            'file_1' => 'mimes:pdf,doc,docx,txt|nullable',
            'file_2' => 'mimes:pdf,doc,docx,txt|nullable',
            'file_3' => 'mimes:pdf,doc,docx,txt|nullable',

            'del_file_list' => 'array',
            'del_file_list.*.id' => 'integer'
        ];
    }
}
