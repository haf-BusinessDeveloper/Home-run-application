<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

use App\Models\TechnicianModel;
use CodeIgniter\API\ResponseTrait;

class Technicians extends BaseController
{
    use ResponseTrait;

    public function list()
    {
        $TechnicianModel = new TechnicianModel();
        $data = $TechnicianModel->findAll();
        // Generic response method
        return $this->respond($data, 200);
    }

    public function getDetails($id = null)
    {
        if ($id) {
            $TechnicianModel = new TechnicianModel();
            $data = $TechnicianModel->where(['technician_id' => $id])->first();
            $data = ["message"=>"technician details", "data" => $data];
            return $this->respond($data, 200);
        }else{
            $data = ["error"=>true,"message"=>"data required"];
            return $this->respond($data, 200);
        }
    }


}
