<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\User;
use App\Models\EmailVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EmailController extends Controller
{
    public function emailVerification($user_id)
    {
        $email = EmailVerification::with(['user'])->firstWhere('user_id', $user_id);

        $data = [
            'title' => 'Selamat Datang',
            'url' => url('emailconfirmation/' . $email->token),
            'name' => $email->user->name,
        ];
        Mail::to($email->user->email)->send(new SendEmail($data));
    }

    public function sendEmailVerification()
    {
        $user = User::firstWhere('id', Auth::guard('user')->user()->id);
        $data = [
            'user_id' => $user->id,
            'token' => Str::random(255)
        ];
        EmailVerification::create($data);

        $this->emailVerification($user->id);
        return back()->with('success', 'Email verifikasi terkirim, Silahkan cek email anda.');
    }

    public function emailConfirmation($token)
    {
        $token = EmailVerification::with(['user'])->firstWhere('token', $token);

        if (empty($token)) {
            if (Auth::guard('user'))
                return redirect('/profile')->with('error', 'Token sudah kadaluarsa.');
            else
                return redirect('/login')->with('error', 'Token sudah kadaluarsa.');
        }

        $data = [
            'id' => $token->user->id,
            'email_verified_at' => date('Y-m-d H:i:s')
        ];

        User::where('id', $token->user->id)->update($data);
        EmailVerification::where('user_id', $token->user_id)->delete();

        if (Auth::guard('user'))
            return redirect('/profile')->with('success', 'Email anda berhasil dikonfrmasi.');
        else
            return redirect('/login')->with('success', 'Email anda berhasil dikonfrmasi, Silahkan login.');
    }

    public function forgot($email)
    {
        return $user = User::firstWhere('email', $email);

        $data = [
            'title' => 'Selamat Datang',
            'url' => url('passwordreset/' . $email->token),
            'name' => $email->user->name,
        ];
        Mail::to($email->user->email)->send(new SendEmail($data));
    }
}
