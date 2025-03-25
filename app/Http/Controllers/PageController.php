<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function faq()
    {
        return view('faq');
    }


    public function profile()
    {
        return view('profile');
    }
}
