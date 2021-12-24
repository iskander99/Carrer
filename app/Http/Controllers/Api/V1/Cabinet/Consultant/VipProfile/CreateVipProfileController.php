<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant\VipProfile;


use App\Http\Requests\Api\Cabinet\Consultant\CreateVipProfileRequest;
use App\Models\TopVipProfile;
use App\Models\TopVipProfileFiles;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Facades\JWTAuth;

class CreateVipProfileController extends Controller
{
    private $data;
    private $request;
    private $files;

    public function action(CreateVipProfileRequest $request){
        $this->request = $request;
        $this->data = $request->validated();

        $user = JWTAuth::user();

        if ($user){
            $vipProfile = $user->vipProfile;
            $this->data['user_id'] = $user->id;
            if (!$vipProfile) {
                $this->uploadFiles('file_1');
                $this->uploadFiles('file_2');
                $this->uploadFiles('file_3');

                try {
                    DB::transaction(function () {
                        $this->addVipProfile();
                        $this->addFiles();
                    });
                } catch (\Exception $e) {
                    $this->deleteFiles();
                    return response(['errors' => ['server' => 'Произошла ошибка при регистрации']], 500);
                }

                return response([
                    'success' => 'Анкета успешно создана'
                ]);
            }else{
                return response(['errors' => ['profile' => 'У вас уже есть ТОП/VIP анкета']], 422);
            }

        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }

    private function addVipProfile(){
        $profile = TopVipProfile::create($this->data);
        $this->data['id'] = $profile['id'];
    }

    private function addFiles(){
        if (!empty($this->files)){
            foreach ($this->files as $file){
                TopVipProfileFiles::create([
                    'top_vip_profile_id' => $this->data['id'],
                    'file' => $file
                ]);
            }
        }
    }

    private function deleteFiles(){
        if (!empty($this->files)){
            foreach ($this->files as $file){
                if (Storage::disk('public')->exists('vip-docs/'.$file))
                    Storage::disk('public')->delete('vip-docs/'.$file);
            }
        }
    }

    private function uploadFiles($fileName){
        if($this->request->hasfile($fileName))
        {
            unset($this->data[$fileName]);
            $this->request->file($fileName)->store('public/vip-docs');
            $this->files[] = $this->request->file($fileName)->hashName();
        }
    }

}
