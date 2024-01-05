<?php

namespace App\Controllers\Dashboard\Settings;

use App\Controllers\BaseController;

use App\Models\DesignPriceModel;
use App\Models\RoomsTypeModel;

class Designsprices extends BaseController
{
    // public function index()
    // {
    //     return view('dashboard/pages/settings/designsprices/home-page');
    // }

    public function create()
    {
        $dataPosted = $this->request->getPost();
        if ($dataPosted) {
            $file = $this->request->getFile('design_image');
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);
            $dataPosted['design_image'] = $newName;
            $DesignPriceModel = new DesignPriceModel();
            $DesignPriceModel->insert($dataPosted);
            $session = session();
            $session->setFlashdata('added_successfuly', 'true');
        }
        $RoomsTypeModel = new RoomsTypeModel();
        $data['roomsTypesList'] = $RoomsTypeModel->findAll();
        return view('dashboard/pages/settings/designsprices/create-page', $data);
    }

    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $DesignPriceModel = new DesignPriceModel();
        $data['record'] = $DesignPriceModel->find($id);
        $RoomsTypeModel = new RoomsTypeModel();
        $data['roomsTypesList'] = $RoomsTypeModel->findAll();
        return view('dashboard/pages/settings/designsprices/show-page', $data);
    }


    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $dataPosted = $this->request->getPost();
        $DesignPriceModel = new DesignPriceModel();
        if ($dataPosted) {
            $file = $this->request->getFile('design_image');
            if ($file->getSize() > 0) {
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads', $newName);
                $dataPosted['design_image'] = $newName;
            }
            $DesignPriceModel->update($id, $dataPosted);
            $session = session();
            $session->setFlashdata('updated_successfuly', 'true');
        }
        $data['record'] = $DesignPriceModel->find($id);
        $RoomsTypeModel = new RoomsTypeModel();
        $data['roomsTypesList'] = $RoomsTypeModel->findAll();
        return view('dashboard/pages/settings/designsprices/update-page', $data);
    }


    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        if ($id) {
            $DesignPriceModel = new DesignPriceModel();
            $DesignPriceModel->delete($id);
            $session = session();
            $session->setFlashdata('deleted_successfuly', 'true');
        }
        return redirect()->to('dashboard/settings/Designsprices/list');
    }


    public function list()
    {
        $DesignPriceModel = new DesignPriceModel();
        $data['records'] = $DesignPriceModel->findAll();
        $RoomsTypeModel = new RoomsTypeModel();
        $data['roomsTypesList'] = $RoomsTypeModel->findAll();
        return view('dashboard/pages/settings/designsprices/list-page', $data);
    }

    public function trash()
    {
        return view('dashboard/pages/settings/designsprices/list-trash-page');
    }
}
