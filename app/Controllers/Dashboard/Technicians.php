<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

use App\Models\TechnicianModel;

class Technicians extends BaseController
{
    // public function index()
    // {
    //     return view('dashboard/pages/technicians/home-page');
    // }
    
    public function create()
    {
        $dataPosted = $this->request->getPost();
        if($dataPosted){
            $TechnicianModel = new TechnicianModel();
            $TechnicianModel->insert($dataPosted);
            $session = session();
            $session->setFlashdata('added_successfuly', 'true');
        }
        return view('dashboard/pages/technicians/create-page');
    }
    
    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $TechnicianModel = new TechnicianModel();
        $data['record'] = $TechnicianModel->find($id);
        return view('dashboard/pages/technicians/show-page', $data);
    }
    
    
    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $dataPosted = $this->request->getPost();
        $TechnicianModel = new TechnicianModel();
        if($dataPosted){
            if(! isset($dataPosted['is_whats_available'])){
                $dataPosted['is_whats_available'] = null;
            }
            $TechnicianModel->update($id, $dataPosted);
            $session = session();
            $session->setFlashdata('updated_successfuly', 'true');
        }
        $data['record'] = $TechnicianModel->find($id);
        return view('dashboard/pages/technicians/update-page', $data);
    }
    
    
    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        if($id){
            $TechnicianModel = new TechnicianModel();
            $TechnicianModel->delete($id);
            $session = session();
            $session->setFlashdata('deleted_successfuly', 'true');
        }
        return redirect()->to('dashboard/technicians/list');
    }
    
    
    public function list()
    {
        $TechnicianModel = new TechnicianModel();
        $data['records'] = $TechnicianModel->findAll();
        return view('dashboard/pages/technicians/list-page', $data);
    }
    
    public function trash()
    {
        return view('dashboard/pages/technicians/list-trash-page');
    }
}
