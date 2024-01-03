<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Technicians extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/technicians/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/technicians/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/technicians/show-page');
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/technicians/update-page');
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/technicians/show-page');
    }
    
    
    public function list()
    {
        return view('dashboard/pages/technicians/list-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/technicians/list-trash-page');
    }
}
