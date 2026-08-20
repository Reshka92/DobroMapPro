<?php

namespace App\Http\Controllers;

class HomeController
{
    public function showPage()
    {
        return view('static.home');
    }
}
