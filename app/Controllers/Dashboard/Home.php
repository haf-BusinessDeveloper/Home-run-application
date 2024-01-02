<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/home-page');
    }

    public function about()
    {
        return view('about_us');
    }
}
