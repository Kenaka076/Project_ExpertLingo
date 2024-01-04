<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backpage.index');
    }

    public function users()
    {
        return view('');
    }

}
