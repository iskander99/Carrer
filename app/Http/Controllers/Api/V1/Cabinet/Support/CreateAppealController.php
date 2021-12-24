<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Support;

use App\Models\SupportAppeal;
use App\Models\SupportMessage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class CreateAppealController extends Controller
{
    private $user;
    private $request;

    public function action(Request $request){
        $this->request = $request;

        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:10000'
        ]);

        $this->user = JWTAuth::user();

        if ($this->user) {
            try {
                DB::transaction(function (){
                    $this->addAppeal();
                });

                return response(['success' => 'Сообщение успешно отправлено.']);
            }catch (\Exception $e){
                return response(['errors' => ['server' => 'Произошла ошибка при отправке сообщения.']], 500);
            }
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }

    private function addAppeal(){
        $appeal = SupportAppeal::create([
            'user_id' => $this->user->id,
            'subject' => $this->request->subject
        ]);

        $this->addMessage($appeal['id']);
    }

    private function addMessage($appealId){
        SupportMessage::create([
            'appeal_id' => $appealId,
            'user_id' => $this->user->id,
            'message' => $this->request->message
        ]);
    }
}
