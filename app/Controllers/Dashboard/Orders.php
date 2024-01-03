<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Orders extends BaseController
{
    public function index()
    {
        return view('dashboard/pages/orders/home-page');
    }
    
    public function create()
    {
        return view('dashboard/pages/orders/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/orders/show-page');
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/orders/update-page');
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/orders/show-page');
    }
    
    
    public function list()
    {
        return view('dashboard/pages/orders/list-page');
    }
    
    public function trash()
    {
        return view('dashboard/pages/orders/list-trash-page');
    }
}
