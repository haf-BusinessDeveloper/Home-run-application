<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Contracts extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/contracts/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/contracts/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/contracts/show-page');
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/contracts/update-page');
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/contracts/show-page');
    }
    
    
    public function list()
    {
        return view('dashboard/pages/contracts/list-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/contracts/list-trash-page');
    }
}
