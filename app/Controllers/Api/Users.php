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

    public function getUserProfile($id = null)
    {
        $UserModel = new UserModel();
        $data = $UserModel->find($id);
        unset($data['password']);
        unset($data['is_admin']);
        // Generic response method
        return $this->respond($data, 200);
    }

    public function signup()
    {
        $postedData = $this->request->getPost();
        if ($postedData) {
            $UserModel = new UserModel();
            $user_id = $UserModel->insert($postedData);
            if ($user_id) {
                $data = ["status" => true, "user_id" => $user_id];
            } else {
                $data = ["status" => false];
            }
            return $this->respond($data, 200);
        }
    }

    public function signin()
    {
        $postedData = $this->request->getPost();
        if ($postedData) {
            $UserModel = new UserModel();
            $user_email = $postedData['user_email'];
            $password = $postedData['password'];
            $user_data = $UserModel->where(["user_email" => $user_email , "password" => $password ])->find();
            if ($user_data) {
                $data = ["status" => true, "user_id" => $user_data];
            } else {
                $data = ["status" => false];
            }
            return $this->respond($data, 200);
        }
    }


}
