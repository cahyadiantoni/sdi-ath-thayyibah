<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeController extends Controller
{
    public function home()
    {
        return view('fe/pages/home');
    }

    public function about()
    {
        return view('fe/pages/about');
    }

    public function guru()
    {
        return view('fe/pages/guru');
    }

    public function artikel()
    {
        return view('fe/pages/artikel');
    }

    public function galeri()
    {
        return view('fe/pages/galeri');
    }

    public function contact()
    {
        return view('fe/pages/contact');
    }
}
