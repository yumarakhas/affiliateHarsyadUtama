<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }
    public function partner()
    {
        return view('partner');
    }
}
