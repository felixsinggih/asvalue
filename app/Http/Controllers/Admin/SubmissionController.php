<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demo;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pengajuan Demo',
            'submissions' => Demo::with(['user'])->latest()->paginate(25),
        ];
        return view('admin.submissions.index', $data);
    }
}
