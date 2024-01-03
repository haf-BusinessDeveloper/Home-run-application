<?php

namespace App\Controllers\Dashboard\Settings;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/settings/services/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/settings/services/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/services/show-page');
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/services/update-page');
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/services/show-page');
    }
    
    
    public function list()
    {
        return view('dashboard/pages/settings/services/list-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/settings/services/list-trash-page');
    }
}
