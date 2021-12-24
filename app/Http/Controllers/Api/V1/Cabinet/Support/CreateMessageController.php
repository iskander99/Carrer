<?php

namespace App\Http\Controllers\Api\V1\Cabinet\Support;


use App\Models\SupportMessage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class CreateMessageController extends Controller
{
    private $user;
    public function action(Request $request){

        $request->validate([
            'appeal_id' => 'required|integer',
            'message' => 'required|string|max:10000'
        ]);

        $this->user = JWTAuth::user();

        if ($this->user) {
            SupportMessage::create([
                'user_id' => $this->user->id,
                'appeal_id' => $request->appeal_id,
                'message' => $request->message
            ]);

            return response(['success' => 'Сообщение успешно отправлено.']);
        }

        return response(['errors' => ['user' => 'Пользователь не найден.']], 404);
    }
}
