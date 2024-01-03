<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Users extends BaseController
{
    // public function index()
    // {
    //     return view('dashboard/pages/users/home-page');
    // }
    
    public function create()
    {
        $dataPosted = $this->request->getPost();
        if($dataPosted){
            $UserModel = new UserModel();
            $UserModel->insert($dataPosted);
            $session = session();
            $session->setFlashdata('added_successfuly', 'true');
        }
        return view('dashboard/pages/users/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $UserModel = new UserModel();
        $data['record'] = $UserModel->find($id);
        return view('dashboard/pages/users/show-page', $data);
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $dataPosted = $this->request->getPost();
        $UserModel = new UserModel();
        if($dataPosted){
            if(! isset($dataPosted['is_whats_available'])){
                $dataPosted['is_whats_available'] = null;
            }
            $UserModel->update($id, $dataPosted);
            $session = session();
            $session->setFlashdata('updated_successfuly', 'true');
        }
        $data['record'] = $UserModel->find($id);
        return view('dashboard/pages/users/update-page', $data);
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        if($id){
            $UserModel = new UserModel();
            $UserModel->delete($id);
            $session = session();
            $session->setFlashdata('deleted_successfuly', 'true');
        }
        return redirect()->to('dashboard/users/list');
    }
    
    
    public function list()
    {
        $UserModel = new UserModel();
        $data['records'] = $UserModel->findAll();
        return view('dashboard/pages/users/list-page', $data);
    }
    
    public function trash()
    {
        return view('dashboard/pages/users/list-trash-page');
    }
}
