<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class Users extends BaseController
{
    use ResponseTrait;

    public function getClientById($id = null)
    {
        $UserModel = new UserModel();
        $data = $UserModel->find($id);
        unset($data['password']);
        unset($data['is_admin']);
        // Generic response method
        return $this->respond($data, 200);
    }
}
