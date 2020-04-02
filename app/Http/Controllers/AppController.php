<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function website()
    {
        return view('website.app');
    }

    public function dashboard()
    {
        return view('dashboard.app');
    }
}
