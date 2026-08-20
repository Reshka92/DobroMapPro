<?php

namespace App\Http\Controllers;

class PageController
{
    public function about()
    {
        return view('static.about');
    }
    public function contacts()
    {
        return view('static.contacts');
    }
    public function supports()
    {
        return view('static.supports');
    }
}
