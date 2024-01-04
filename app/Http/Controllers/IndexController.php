<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        return view('frontpage.index');
    }

    function sign_in()
    {
        return view('frontpage.sign_in');
    }

    function sign_up()
    {
        return view('frontpage.sign_up');
    }

    function homepage()
    {
        return view('frontpage.homepage');
    }

    function pilih_guru()
    {
        return view('frontpage.pilih_guru');
    }

    function kursus()
    {
        return view('frontpage.kursus');
    }

    function payment()
    {
        return view('frontpage.payment');
    }
    
}

