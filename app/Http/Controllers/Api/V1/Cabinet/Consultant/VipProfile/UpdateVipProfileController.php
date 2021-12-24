<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Consultant\VipProfile;


use App\Http\Requests\Api\Cabinet\Consultant\UpdateVipProfileRequest;
use App\Models\TopVipProfile;
use App\Models\TopVipProfileFiles;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdateVipProfileController extends Controller
{

    private $data;
    private $vipProfile;
    private $request;
    private $files;

    public function action(UpdateVipProfileRequest $request){
        $this->request = $request;
        $this->data = $this->request->validated();
        $user = JWTAuth::user();

        if ($user){
            $this->vipProfile = $user->vipProfile;

            if ($this->vipProfile){

                $this->deleteFiles();

                $this->uploadFiles('file_1');
                $this->uploadFiles('file_2');
                $this->uploadFiles('file_3');

                try {

                    DB::transaction(function () {
                        $this->updateVipProfile();
                        $this->addFiles();
                    });

                    return response(['success' => 'Данные успешно обновлены.']);
                } catch (\Exception $e) {
                    $this->deleteFilesIfFail();
                    return response(['errors' => ['server' => 'Произошла ошибка.']], 500);
                }
            }else{
                return response(['errors' => ['profile' => 'VIP/TOP анкета не найдена для обновления.']], 404);
            }
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }

    private function updateVipProfile(){
        $this->vipProfile->update($this->data);
    }

    private function deleteFiles(){
        if (!empty($this->data['del_file_list'])){
            foreach ($this->data['del_file_list'] as $item){
                $file = TopVipProfileFiles::find($item['id']);

                if ($file) {
                    if (Storage::disk('public')->exists('vip-docs/' . $file->file))
                        Storage::disk('public')->delete('vip-docs/' . $file->file);

                    $file->delete();
                }
            }

            unset($this->data['del_file_list']);
        }
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

    private function uploadFiles($fileName){
        if($this->request->hasfile($fileName))
        {
            unset($this->data[$fileName]);
            $this->request->file($fileName)->store('public/vip-docs');
            $this->files[] = $this->request->file($fileName)->hashName();
        }
    }

    private function deleteFilesIfFail(){
        if (!empty($this->files)){
            foreach ($this->files as $file){
                if (Storage::disk('public')->exists('vip-docs/'.$file))
                    Storage::disk('public')->delete('vip-docs/'.$file);
            }
        }
    }

}
