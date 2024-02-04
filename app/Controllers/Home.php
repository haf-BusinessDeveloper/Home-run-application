<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo "welcome Page";die;
        
        return view('dashboard/pages/home-page');
    }

    public function about()
    {
        return view('about_us');
    }
}
