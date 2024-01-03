<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/users/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/users/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/users/show-page');
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/users/update-page');
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/users/show-page');
    }
    
    
    public function list()
    {
        return view('dashboard/pages/users/list-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/users/list-trash-page');
    }
}
