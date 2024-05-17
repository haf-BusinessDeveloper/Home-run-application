<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\ClientsOrderModel;

class Home extends BaseController
{
    public function index()
    {
        $UserModel = new UserModel();
        $usersRecords = $UserModel->where(['is_admin' => null])->findAll();
        $data['usersCount'] = count($usersRecords);
        $ClientsOrderModel = new ClientsOrderModel();
        $ordersRecords = $ClientsOrderModel->findAll();
        $data['ordersCount'] = count($ordersRecords);
        return view('dashboard/pages/home-page', $data);
    }

    public function about()
    {
        return view('about_us');
    }
}
