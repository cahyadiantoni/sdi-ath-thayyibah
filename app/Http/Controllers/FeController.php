<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeController extends Controller
{
    public function Home()
    {
        return view('fe/pages/home');
    }

    public function About()
    {
        return view('fe/pages/about');
    }
}
