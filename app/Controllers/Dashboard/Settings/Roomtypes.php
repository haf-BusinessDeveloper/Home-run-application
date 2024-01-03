<?php

namespace App\Controllers\Dashboard\Settings;

use App\Controllers\BaseController;

use App\Models\RoomsTypeModel;

class Roomtypes extends BaseController
{
    // public function index()
    // {
    //     return view('dashboard/pages/settings/roomtypes/home-page');
    // }
    
    public function create()
    {
        $dataPosted = $this->request->getPost();
        if($dataPosted){
            $RoomsTypeModel = new RoomsTypeModel();
            $RoomsTypeModel->insert($dataPosted);
            $session = session();
            $session->setFlashdata('added_successfuly', 'true');
        }
        return view('dashboard/pages/settings/roomtypes/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $RoomsTypeModel = new RoomsTypeModel();
        $data['record'] = $RoomsTypeModel->find($id);
        return view('dashboard/pages/settings/roomtypes/show-page', $data);
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $dataPosted = $this->request->getPost();
        $RoomsTypeModel = new RoomsTypeModel();
        if($dataPosted){
            $RoomsTypeModel->update($id, $dataPosted);
            $session = session();
            $session->setFlashdata('updated_successfuly', 'true');
        }
        $data['record'] = $RoomsTypeModel->find($id);
        return view('dashboard/pages/settings/roomtypes/update-page', $data);
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        if($id){
            $RoomsTypeModel = new RoomsTypeModel();
            $RoomsTypeModel->delete($id);
            $session = session();
            $session->setFlashdata('deleted_successfuly', 'true');
        }
        return redirect()->to('dashboard/settings/roomtypes/list');
    }
    
    
    public function list()
    {
        $RoomsTypeModel = new RoomsTypeModel();
        $data['records'] = $RoomsTypeModel->findAll();
        return view('dashboard/pages/settings/roomtypes/list-page', $data);
    }
    
    public function trash()
    {
        $RoomsTypeModel = new RoomsTypeModel();
        $data['records'] = $RoomsTypeModel->onlyDeleted()->findAll();
        return view('dashboard/pages/settings/roomtypes/list-trash-page', $data);
    }
}
