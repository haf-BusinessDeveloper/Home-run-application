<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $UserModel = new UserModel();
        $postedData = $this->request->getPost();
        if($postedData){
            $res = $UserModel->where(['user_email' => $postedData['user_email'], 'password' => $postedData['password'], 'is_admin' => 1])->find();
            if($res){
                $session = session();
                $session->set('isLogin', true);
                return redirect()->to('dashboard');
            }
        }
        return view('auth/login-page');
    }

    public function logout()
    {
        // session_destroy();
        // or
        $session = session();
        $session->destroy();
        return redirect()->to('auth');
    }

}
