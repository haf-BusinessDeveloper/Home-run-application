<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

use App\Models\RoomsTypeModel;

use CodeIgniter\API\ResponseTrait;

class Rooms extends BaseController
{
    use ResponseTrait;

    public function getAllRoomsTypes()
    {
        $RoomsTypeModel = new RoomsTypeModel();
        $data = $RoomsTypeModel->findAll();
        return $this->respond($data, 200);
    }


}
