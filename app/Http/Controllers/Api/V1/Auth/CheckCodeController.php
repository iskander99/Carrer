<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Mail\ResetPasswdMail;
use App\Mail\SendPasswdMail;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;

class CheckCodeController extends Controller
{
    public function action(Request $request)
    {
        $request->validate(['code' => 'required|string|min:6|max:6', 'email' => 'required|email|max:255']);

        $resets = ResetPassword::where('email', '=', $request->email)
            ->orderBy('created_at', 'desc')
            ->get();

        if (count($resets) > 0 && Hash::check($request->code, $resets[0]->code)){

            return response()->json([
                'success' => 'Код - корректный.',
                'data' => ['access_token' => $this->getUser($request->email)]
            ]);
        }else{
            return response()->json(['errors' => ['code' => 'Код - некорректный.']], 422);
        }
    }

    private function getUser($email){
        $password = $this->randomPassword();
        $user = User::where('email', '=', $email)->update(['password' => Hash::make($password)]);

        if ($user){
            $this->sendMail($email, $password);
            return JWTAuth::attempt(['email' => $email, 'password' => $password]);
        }

        return false;
    }

    private function sendMail($toEmail, $password){
        $details = [
            'title' => 'Карьерный консультант - Восстановление пароля',
            'body' => 'Ваш новый пароль: ' . $password
        ];

        Mail::to($toEmail)->send(new SendPasswdMail($details));
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

}
