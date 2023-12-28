<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('clients/welcome_message');
    }

    public function about()
    {
        return view('about_us');
    }
}
