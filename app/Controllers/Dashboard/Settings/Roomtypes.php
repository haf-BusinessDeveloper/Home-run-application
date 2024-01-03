<?php

namespace App\Controllers\Dashboard\Settings;

use App\Controllers\BaseController;

class Roomtypes extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/settings/roomtypes/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/settings/roomtypes/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/roomtypes/show-page');
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/roomtypes/update-page');
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/settings/roomtypes/show-page');
    }
    
    
    public function list()
    {
        return view('dashboard/pages/settings/roomtypes/list-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/settings/roomtypes/list-trash-page');
    }
}
