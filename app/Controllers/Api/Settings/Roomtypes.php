<?php

namespace App\Controllers\Api\Settings;

use App\Controllers\BaseController;

use App\Models\RoomsTypeModel;

use CodeIgniter\API\ResponseTrait;

class Roomtypes extends BaseController
{
    use ResponseTrait;

    public function show($id = null)
    {
        if ($id === null) {
            $data = [
                "message" => "data is required"
            ];
            return $this->respond($data, 200);
        }
        $RoomsTypeModel = new RoomsTypeModel();
        $data['record'] = $RoomsTypeModel->find($id);
        // Generic response method
        return $this->respond($data, 200);
    }

    public function list()
    {
        $RoomsTypeModel = new RoomsTypeModel();
        $data['records'] = $RoomsTypeModel->findAll();
        // Generic response method
        return $this->respond($data, 200);
    }

    public function trash()
    {
        $RoomsTypeModel = new RoomsTypeModel();
        $data['records'] = $RoomsTypeModel->onlyDeleted()->findAll();
        return view('dashboard/pages/settings/roomtypes/list-trash-page', $data);
    }
}
