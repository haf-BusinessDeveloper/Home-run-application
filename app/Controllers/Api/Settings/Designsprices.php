<?php

namespace App\Controllers\Api\Settings;

use App\Controllers\BaseController;

use App\Models\DesignPriceModel;
use App\Models\RoomsTypeModel;

use CodeIgniter\API\ResponseTrait;

class Designsprices extends BaseController
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
        $DesignPriceModel = new DesignPriceModel();
        $data['record'] = $DesignPriceModel->find($id);
        // $RoomsTypeModel = new RoomsTypeModel();
        // $data['roomsTypesList'] = $RoomsTypeModel->findAll();
        // Generic response method
        return $this->respond($data, 200);
    }

    public function list()
    {
        $DesignPriceModel = new DesignPriceModel();
        $data['records'] = $DesignPriceModel->findAll();
        // $RoomsTypeModel = new RoomsTypeModel();
        // $data['roomsTypesList'] = $RoomsTypeModel->findAll();
        // Generic response method
        return $this->respond($data, 200);
    }

    public function listByRoomTypeID($room_type_id = null)
    {
        if ($room_type_id === null) {
            $data = [
                "message" => "data is required"
            ];
            return $this->respond($data, 200);
        }
        $DesignPriceModel = new DesignPriceModel();
        $data['records'] = $DesignPriceModel->where(['room_type_id' => $room_type_id])->findAll();
        // $RoomsTypeModel = new RoomsTypeModel();
        // $data['roomsTypesList'] = $RoomsTypeModel->findAll();
        // Generic response method
        return $this->respond($data, 200);
    }

}
