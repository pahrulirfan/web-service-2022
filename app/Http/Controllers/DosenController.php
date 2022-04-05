<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();

        return view('dosen/index', compact('data'));
    }

    public function create()
    {
        return view('dosen/add');
    }
}
