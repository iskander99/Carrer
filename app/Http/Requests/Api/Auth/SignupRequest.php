<?php

namespace App\Http\Requests\Api\Auth;

use Dotenv\Validator;
use Illuminate\Http\Request;

class SignupRequest
{
    const CANDIDATE = 1;
    const CONSULTANT = 2;

    const TAG_REGION = 3;
    const TAG_INDUSTRY = 4;
    const TAG_VIP = 6;

    public static function isValid(Request $request)
    {
        self::checkNecessaryParams($request);

        return self::checkRole($request);
    }

    private static function checkNecessaryParams(Request $request){
        $rules = ['role' => 'required|integer|min:1|max:2'];

        if ($request->role == self::CANDIDATE)
            $rules = array_merge($rules, ['tag_rule' => 'required|integer|min:1|max:6']);

        $request->validate($rules);
    }

    private static function checkRole(Request $request)
    {
        switch ($request->role) {
            case self::CANDIDATE:
            {
                $rules = array_merge(self::getGeneralRules(), self::getCandidateRules($request->tag_rule));
                break;
            }
            case self::CONSULTANT:
            {
                $rules = array_merge(self::getGeneralRules(), self::getConsultantRules());
                break;
            }
        }

        return $request->validate($rules, ['email.unique' => 'Пользователь с таким email уже существует']);
    }


    private static function getGeneralRules(): array
    {
        return array_merge([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|max:20',
            'email' => 'required|email|unique:users|max:255',
            'birth_day' => 'required|date|max:255',
            'citizenship' => 'required|max:255',
            'password' => 'required|confirmed|min:6|max:255',
            //'img' => 'required|image|mimes:jpg,png,jpeg',
            'role' => 'required|integer|min:1|max:2',
        ], self::getEducationRules());
    }

    private static function getCandidateRules($tag): array
    {
        $rules = array_merge([
            'region' => 'required|integer',
            'city' => 'required|string',
            'prof_field' => 'required|integer',
            'desired_post' => 'required|string|max:255',
            'desired_salary' => 'required|integer',
        ], self::getExperienceRules(self::CANDIDATE));

        return array_merge($rules, self::getTagRules($tag));
    }

    private static function getTagRules($tag): array{
        if ($tag == self::TAG_REGION)
            return ['search_region' => 'required|integer'];
        else if ($tag == self::TAG_INDUSTRY)
            return ['search_industry' => 'required|integer'];
        else if ($tag == self::TAG_VIP)
            return ['search_industry' => 'required|integer', 'search_region' => 'required|integer'];

        return [];
    }

    private static function getConsultantRules(): array
    {
        return array_merge([
            'regions_list' => 'required|array',
            'regions_list.*.region_id' => 'required|integer',
            'industries_list' => 'required|array',
            'industries_list.*.industry_id' => 'required|integer',
            'work_place' => 'required|string|max:255',
            'is_incognito' => 'required|integer|min:0|max:1',
            'work_mode' => 'required|integer',
            'prof_achievements' => 'required|string|max:500'
        ], self::getExperienceRules(self::CONSULTANT));
    }

    private static function getEducationRules(){
        return [
            'edu_list' => 'required|array',
            'edu_list.*.level' => 'required|integer',
            'edu_list.*.institution' => 'required|string|max:255',
            'edu_list.*.faculty' => 'required|string|max:255',
            'edu_list.*.specialization' => 'required|string|max:255',
            'edu_list.*.edu_years_from' => 'required|integer',
            'edu_list.*.edu_years_to' => 'required|integer'
        ];
    }

    private static function getExperienceRules($role){
        $rules = [
            'exp_list' => 'array',
            'exp_list.*.organization' => 'string|max:255',
            'exp_list.*.post' => 'string|max:255',
            'exp_list.*.duties' => 'string|max:255',
            'exp_list.*.exp_years_from' => 'integer',
            'exp_list.*.exp_years_to' => 'integer',
            'exp_list.*.now' => 'integer'
        ];

        if ($role === self::CANDIDATE)
            $rules = array_merge($rules, ['exp_list.*.func_direction' => 'integer']);
        else if ($role === self::CONSULTANT)
            $rules = array_merge($rules, ['exp_list.*.exp_mode' => 'integer']);

        return $rules;
    }

    public $messages = [
        'required' => 'Необходимо заполнить поле :attribute.',
    ];
}
