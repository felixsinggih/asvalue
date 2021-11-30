<?php

namespace App\Http\Controllers;

use App\Models\EmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Mendaftar'];
        return view('web.register.index', $data);
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'name' => 'required',
            'address' => 'required',
            'zip_code' => 'required|numeric|digits:5',
            'email' => 'required|email|unique:asv_users',
            'password' => 'required|min:6|max:255',
            'ktp' => 'required|image|file|max:300',
        ]);

        $validData['password'] = Hash::make($validData['password']);


        if ($request->file('ktp')) {
            $validData['ktp'] = $request->file('ktp')->store('uploads/images');
        }

        $user = User::create($validData);

        $data = [
            'user_id' => $user->id,
            'token' => Str::random(255)
        ];
        EmailVerification::create($data);
        app('App\Http\Controllers\EmailController')->emailVerification($user->id);

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan masuk ke akun anda.');
    }
}
