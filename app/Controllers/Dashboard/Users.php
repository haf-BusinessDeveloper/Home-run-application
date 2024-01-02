<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/home-page');
    }
    
    public function list()
    {
        return view('dashboard/pages/home-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/home-page');
    }
}
