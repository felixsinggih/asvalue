<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Profil'];
        return view('web.profile.index', $data);
    }
}
