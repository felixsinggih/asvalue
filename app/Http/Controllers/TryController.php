<?php

namespace App\Http\Controllers;

use App\Mail\MailDemo;
use App\Models\Demo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TryController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Demo Gratis'];
        return view('web.demo.index', $data);
    }

    public function trynow()
    {
        $demo = Demo::firstWhere('user_id', Auth::guard('user')->user()->id);

        if (!empty($demo)) {
            return redirect('/demoreject');
        }

        $user = User::firstWhere('id', Auth::guard('user')->user()->id);
        $data = [
            'user_id' => $user->id,
            'created_at' => date('Y-m-d H:i:s')
        ];

        Demo::create($data);
        Mail::to($user->email)->send(new MailDemo($user->name));
        return redirect('/demosuccess');
    }

    public function demoSuccess()
    {
        $data = ['title' => 'Pengajuan Demo berhasil'];
        return view('web.demo.success', $data);
    }

    public function demoReject()
    {
        $data = ['title' => 'Pengajuan Demo ditolak'];
        return view('web.demo.reject', $data);
    }
}
