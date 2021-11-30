<?php

namespace App\Http\Controllers;

use App\Mail\MailPasswordReset;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Lupa Password'];
        return view('web.forgot_password.index', $data);
    }

    public function forgot(Request $request)
    {
        // app('App\Http\Controllers\EmailController')->forgot($request->email);
        $user = User::firstWhere('email', $request->email);

        if (empty($user)) {
            return redirect('/forgotpassword')->with('error', 'Email tidak terdaftar.');
        }

        $data = [
            'user_id' => $user->id,
            'token' => Str::random(6),
        ];
        PasswordReset::create($data);

        Mail::to($user->email)->send(new MailPasswordReset($data));
        return redirect('/passwordverification')->with('success', 'Silahkan cek kode verifikasi pada email anda.');
    }

    public function verification()
    {
        $data = ['title' => 'Verifikasi'];
        return view('web.forgot_password.verification', $data);
    }

    public function verify(Request $request)
    {
        $user = PasswordReset::with(['user'])->firstWhere('token', $request->token);

        if (empty($user)) {
            return redirect('/passwordverification')->with('error', 'Kode verifikasi salah.');
        }

        return redirect('/resetpassword/' . $user->token)->with('success', 'Silahkan ubah password anda.');
    }

    public function reset($token)
    {
        $data = [
            'title' => 'Reset Password',
            'token' => $token
        ];
        return view('web.forgot_password.reset', $data);
    }

    public function reseting(Request $request)
    {
        if (empty($request->token)) {
            return redirect('/login');
        }

        $request->validate([
            'password' => 'required|min:6|max:255',
        ]);

        $token = PasswordReset::with(['user'])->firstWhere('token', $request->token);

        $data = [
            'id' => $token->user->id,
            'password' => Hash::make($request->password)
        ];
        User::where('id', $token->user->id)->update($data);
        PasswordReset::where('user_id', $token->user_id)->delete();

        return redirect('/login')->with('success', 'Password anda berhasil diubah, Silahkan login.');
    }
}
