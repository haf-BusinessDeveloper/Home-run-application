<?php

namespace App\Controllers\Dashboard\Settings;

use App\Controllers\BaseController;

use App\Models\ServiceModel;

class Services extends BaseController
{
    // public function index()
    // {
    //     return view('dashboard/pages/settings/services/home-page');
    // }
    
    public function create()
    {
        $dataPosted = $this->request->getPost();
        if($dataPosted){
            var_dump($dataPosted);
            $ServiceModel = new ServiceModel();
            $ServiceModel->insert($dataPosted);
            $session = session();
            $session->setFlashdata('added_successfuly', 'true');
        }
        return view('dashboard/pages/settings/services/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $ServiceModel = new ServiceModel();
        $data['record'] = $ServiceModel->find($id);
        return view('dashboard/pages/settings/services/show-page', $data);
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $dataPosted = $this->request->getPost();
        $ServiceModel = new ServiceModel();
        if($dataPosted){
            $ServiceModel->update($id, $dataPosted);
            $session = session();
            $session->setFlashdata('updated_successfuly', 'true');
        }
        $data['record'] = $ServiceModel->find($id);
        return view('dashboard/pages/settings/services/update-page', $data);
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        if($id){
            $ServiceModel = new ServiceModel();
            $ServiceModel->delete($id);
            $session = session();
            $session->setFlashdata('deleted_successfuly', 'true');
        }
        return redirect()->to('dashboard/settings/services/list');
    }
    
    
    public function list()
    {
        $ServiceModel = new ServiceModel();
        $data['records'] = $ServiceModel->findAll();
        return view('dashboard/pages/settings/services/list-page', $data);
    }
    
    public function trash()
    {
        return view('dashboard/pages/settings/services/list-trash-page');
    }
}
