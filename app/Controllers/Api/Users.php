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
        $data = $UserModel->where(["user_id" => $id])->first();
        // unset($data['password']);
        // unset($data['is_admin']);
        // Generic response method
        return $this->respond($data, 200);
    }

    public function signup()
    {
        $data = $this->request->getJSON();
        if ($data) {
            $data = json_encode($data);
            $data = json_decode($data, true);

            $UserModel = new UserModel();
            $user_id = $UserModel->insert($data);
            $data = $UserModel->where(['user_email' => $data['user_email'], 'password' => $data['password']])->first();
            $data = ["message"=>"user is registered", "data" => $data];
            return $this->respond($data, 200);
        }else{
            $data = ["error"=>true,"message"=>"data required"];
            return $this->respond($data, 200);
        }
    }

    public function getUserProfile($id = null)
    {
        $data = $this->request->getJSON();
        if ($data) {
            $data = json_encode($data);
            $data = json_decode($data, true);

            $UserModel = new UserModel();
            $data = $UserModel->where(['user_email' => $data['user_email'], 'password' => $data['password']])->first();
            $data = ["message"=>"user profile", "data" => $data];
            return $this->respond($data, 200);
        }else{
            $data = ["error"=>true,"message"=>"data required"];
            return $this->respond($data, 200);
        }
    }

    public function signin()
    {
        $data = $this->request->getJSON();
        if ($data) {
            $data = json_encode($data);
            $data = json_decode($data, true);

            $UserModel = new UserModel();
            $data = $UserModel->where(['user_email' => $data['user_email'], 'password' => $data['password']])->first();
            if($data){
                $data = ["message"=>"user is logged in", "data" => $data];
            }else{
                $data = ["message"=>"user is not found", "data" => $data];
            }
            return $this->respond($data, 200);
        }else{
            $data = ["error"=>true,"message"=>"data required"];
            return $this->respond($data, 200);
        }
    }

    public function editProfile($id = null)
    {
        $data = $this->request->getJSON();
        if ($data) {
            $data = json_encode($data);
            $data = json_decode($data, true);

            $UserModel = new UserModel();
            $UserModel->update($id,$data);
            $data = $UserModel->where(['user_email' => $data['user_email'], 'password' => $data['password']])->first();
            $data = ["message"=>"user is updated", "data" => $data];
            return $this->respond($data, 200);
        }else{
            $data = ["error"=>true,"message"=>"data required"];
            return $this->respond($data, 200);
        }
    }

    // public function signin()
    // {
    //     $data = $this->request->getJSON();
    //     if ($data) {
    //         $data = json_encode($data);
    //         $data = json_decode($data, true);

    //         $UserModel = new UserModel();
    //         $user_id = $UserModel->insert($data);
    //         $data = $UserModel->find($user_id);
    //         $data = ["message"=>"user is registered", "data" => $data];
    //         return $this->respond($data, 200);
    //     }else{
    //         $data = ["error"=>true,"message"=>"data required"];
    //         return $this->respond($data, 200);
    //     }
    // }


}
