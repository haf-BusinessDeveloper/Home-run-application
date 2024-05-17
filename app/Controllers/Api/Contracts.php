<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\ClientsOrderModel;
use App\Models\RoomsTypeModel;
use App\Models\DesignPriceModel;
use App\Models\RoomsPerOrderModel;

use CodeIgniter\API\ResponseTrait;

class Contracts extends BaseController
{
    use ResponseTrait;

    // public function index()
    // {
    //     return view('dashboard/pages/orders/home-page');
    // }

    // public function save($id = null)
    // {
    //     if ($id === null) {
    //         $data = ["error"=>true,"message"=>"data required"];
    //         return $this->respond($data, 200);
    //     }
    //     $jsonData = $this->request->getJSON();
    //     if($jsonData){
    //         $data = json_encode($jsonData);
    //         $data = json_decode($data, true);
    //         return $this->respond($data, 200);
    //     }
    // }

    public function save($id = null)
    {
        if ($id === null) {
            $data = ["error" => true, "message" => "data required"];
            return $this->respond($data, 200);
        }


        $jsonData = $this->request->getJSON();
        if ($jsonData) {
            $jsonData = json_encode($jsonData);
            $jsonData = json_decode($jsonData, true);
            $ClientsOrderModel = new ClientsOrderModel();
            $OrderData = $ClientsOrderModel->where("client_order_id", $id)->first();
            $dataToUpdate = [
                "client_order_status" => "Contracted",
                "has_a_contract" => $jsonData['has_a_contract'],
                "contract_details" => $jsonData['contract_details'],
            ];
            $ClientsOrderModel->update($id,$dataToUpdate);

            return $this->respond($dataToUpdate, 200);
        }
        // error message
        $data = ["error" => true, "message" => "data required"];
        return $this->respond($data, 200);
    }


    public function step2($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $UserModel = new UserModel();
        $data['clients_list'] = $UserModel->where('is_admin', null)->findAll();
        $RoomsTypeModel = new RoomsTypeModel();
        $data['RoomsTypes_list'] = $RoomsTypeModel->findAll();
        $ClientsOrderModel = new ClientsOrderModel();
        $orderData = $ClientsOrderModel->find($id);
        $real_estate_unit_rooms_json = $orderData['real_estate_unit_rooms_json'];
        $real_estate_unit_rooms_json = json_decode($real_estate_unit_rooms_json, true);
        $DesignPriceModel = new DesignPriceModel();


        $RoomsPerOrderModel = new RoomsPerOrderModel();
        $real_estate_unit_rooms_List = $RoomsPerOrderModel->where('client_order_id', $id)->findAll();

        for ($i = 0; $i < count($real_estate_unit_rooms_List); $i++) {
            # code...
            $real_estate_unit_rooms_List[$i]['designs'] = $DesignPriceModel->where('room_type_id', $real_estate_unit_rooms_List[$i]['room_type_id'])->findAll();
        }
        // echo json_encode($real_estate_unit_rooms_json);die;

        $data['real_estate_unit_rooms_json'] = json_encode($real_estate_unit_rooms_List);
        // echo(json_encode($data));die;
        return view('dashboard/pages/orders/step2-page', $data);
    }

    public function show($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/orders/show-page');
    }


    public function update($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        $UserModel = new UserModel();
        $data['clients_list'] = $UserModel->where('is_admin', null)->findAll();
        $RoomsTypeModel = new RoomsTypeModel();
        $data['RoomsTypes_list'] = $RoomsTypeModel->findAll();


        $jsonData = $this->request->getJSON();
        $ClientsOrderModel = new ClientsOrderModel();
        if ($jsonData) {
            $ClientsOrderModel->update($id, $jsonData);
            return redirect()->to('dashboard/orders/step2/' . $id);
        }
        $data['orderData'] = $ClientsOrderModel->find($id);
        return view('dashboard/pages/orders/update-page', $data);
    }


    public function delete($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }
        return view('dashboard/pages/orders/show-page');
    }


    public function list()
    {
        $ClientsOrderModel = new ClientsOrderModel();
        $clients_orders = $ClientsOrderModel->findAll();
        if ($clients_orders) {
            $data = [
                "message" => "clients_orders_list",
                "clients_orders" => $clients_orders,
            ];
            return $this->respond($data, 200);
        } else {
            $data = [
                "message" => "there is no data to display",
                "clients_orders" => []
            ];
            return $this->respond($data, 200);
        }
    }

    public function listByUserID($user_id = null)
    {
        if (!$user_id) {
            $data = [
                "message" => "data is required"
            ];
            return $this->respond($data, 200);
        }
        $ClientsOrderModel = new ClientsOrderModel();
        $clients_orders = $ClientsOrderModel->where(['user_id' => $user_id])->findAll();
        if ($clients_orders) {
            $data = [
                "message" => "clients_orders_ByUserID",
                "clients_ordersByUserID" => $clients_orders,
            ];
            return $this->respond($data, 200);
        } else {
            $data = [
                "message" => "there is no data to display",
                "clients_orders" => []
            ];
            return $this->respond($data, 200);
        }
    }

    public function orderByID($client_order_id = null)
    {
        if (!$client_order_id) {
            $data = [
                "message" => "data is required"
            ];
            return $this->respond($data, 200);
        }
        $ClientsOrderModel = new ClientsOrderModel();
        $clients_orders = $ClientsOrderModel->where(['client_order_id' => $client_order_id])->first();
        if ($clients_orders) {
            $data = [
                "message" => "clients_orders_ByUserID",
                "data" => $clients_orders,
            ];
            return $this->respond($data, 200);
        } else {
            $data = [
                "message" => "there is no data to display",
                "data" => null
            ];
            return $this->respond($data, 200);
        }
    }

    public function trash()
    {
        return view('dashboard/pages/orders/list-trash-page');
    }
}
