<?php

namespace App\Http\Requests\Api\Cabinet\Resume;

use Illuminate\Http\Request;

class UpdateRequest
{
    const CANDIDATE = 1;
    const CONSULTANT = 2;

    const TAG_REGION = 3;
    const TAG_INDUSTRY = 4;
    const TAG_VIP = 6;

    public static function isValid(Request $request, $user, $tag){

        $rules = array_merge(self::getGeneralRules(), self::getEmailRules($request, $user));

        if ($user->role == self::CANDIDATE){
            $rules = array_merge($rules, self::getCandidateRules());

            if ($tag == self::TAG_REGION){
                $rules = array_merge($rules, ['search_region' => 'required|integer']);
            }else if ($tag == self::TAG_INDUSTRY){
                $rules = array_merge($rules, ['search_industry' => 'required|integer']);
            }else if ($tag == self::TAG_VIP){
                $rules = array_merge($rules, ['search_industry' => 'required|integer', 'search_region' => 'required|integer']);
            }

            return $request->validate($rules);
        }else if ($user->role == self::CONSULTANT){
            return $request->validate(array_merge($rules, self::getConsultantRules()));
        }

        return $request->validate(self::getGeneralRules());
    }

    private static function getGeneralRules(){
        $rules = array_merge([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|max:20',
            'email' => 'required|email|max:255',
            'birth_day' => 'required|date|max:255',
            'citizenship' => 'required|max:255',
            'password' => 'min:6|max:255',
            'img' => 'image|mimes:jpg,png,jpeg',
        ], self::getEducationRules());

        $rules = array_merge($rules, self::getAddedElementsRules());

        return array_merge($rules, self::getDeletedElementsRules());
    }

    private static function getEmailRules($request, $user)
    {
        if ($request->email) {
            if ($request->email !== $user->email) {
                return ['email' => 'required|email|unique:users|max:255'];
            } else {
                return ['email' => 'required|email|max:255'];
            }
        }

        return [];
    }

    private static function getCandidateRules(){
        return array_merge([
            'region' => 'required|integer',
            'city' => 'required|string',
            'prof_field' => 'required|integer',
            'desired_post' => 'required|string|max:255',
            'desired_salary' => 'required|integer'
        ], self::getExperienceRules(self::CANDIDATE));
    }

    private static function getConsultantRules(){
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

    private static function getDeletedElementsRules(){
        return [
            'del_exp_list' => 'array',
            'del_exp_list.*.id' => 'integer',

            'del_edu_list' => 'array',
            'del_edu_list.*.id' => 'integer',

            'del_regions_list' => 'array',
            'del_regions_list.*.id' => 'integer',

            'del_industries_list' => 'array',
            'del_industries_list.*.id' => 'integer'
        ];
    }

    private static function getAddedElementsRules(){
        return [
            'add_regions_list' => 'array',
            'add_regions_list.*.id' => 'integer',
            'add_industries_list' => 'array',
            'add_industries_list.*.id' => 'integer',

            'add_exp_list' => 'array',
            'add_exp_list.*.organization' => 'string|max:255',
            'add_exp_list.*.post' => 'string|max:255',
            'add_exp_list.*.duties' => 'string|max:255',
            'add_exp_list.*.exp_years_from' => 'integer',
            'add_exp_list.*.exp_years_to' => 'integer',
            'add_exp_list.*.now' => 'integer',

            'add_edu_list' => 'array',
            'add_edu_list.*.level' => 'integer',
            'add_edu_list.*.institution' => 'string|max:255',
            'add_edu_list.*.faculty' => 'string|max:255',
            'add_edu_list.*.specialization' => 'string|max:255',
            'add_edu_list.*.edu_years_from' => 'integer',
            'add_edu_list.*.edu_years_to' => 'integer'
        ];
    }

}
