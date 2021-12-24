<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Mail\ResetPasswdMail;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Testing\Fluent\Concerns\Has;

class ResetController extends Controller
{
    public function action(Request $request)
    {
        $request->validate(
            ['email' => 'required|email'],
            ['email.email' => 'Неправильный формат почты.', 'email.required' => 'Почта должна быть заполнена.']
        );

        $user = User::where('email',$request->email)->first();

        if ($user){
            $code = rand(111111,999999);
            $reset = new ResetPassword();
            $reset->email = $request->email;
            $reset->code = Hash::make($code);
            $reset->save();

            $this->sendMail($request->email, $code);

            return response()->json(['success' => 'Сообщение успешно отправлено.']);
        }else{
            return response()->json(['errors' => ['email' => 'Пользователь с такой почтой не существует.']], 404);
        }

    }

    private function sendMail($toEmail, $code){
        $details = [
            'title' => 'Карьерный консультант - Восстановление пароля',
            'body' => 'Ваш код: ' . $code
        ];

        Mail::to($toEmail)->send(new ResetPasswdMail($details));
    }

}
