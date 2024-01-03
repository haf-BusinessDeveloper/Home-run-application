<?php

namespace App\Controllers\Dashboard\Settings;

use App\Controllers\BaseController;

class Designsprices extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/settings/designsprices/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/settings/designsprices/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/designsprices/show-page');
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/designsprices/update-page');
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/designsprices/show-page');
    }
    
    
    public function list()
    {
        return view('dashboard/pages/settings/designsprices/list-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/settings/designsprices/list-trash-page');
    }
}
