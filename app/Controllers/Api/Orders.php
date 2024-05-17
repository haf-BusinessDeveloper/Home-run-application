<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\ClientsOrderModel;
use App\Models\RoomsTypeModel;
use App\Models\DesignPriceModel;
use App\Models\RoomsPerOrderModel;

use CodeIgniter\API\ResponseTrait;

class Orders extends BaseController
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

    public function create()
    {
        $UserModel = new UserModel();
        $data['clients_list'] = $UserModel->where('is_admin', null)->findAll();
        $RoomsTypeModel = new RoomsTypeModel();
        $data['RoomsTypes_list'] = $RoomsTypeModel->findAll();


        $jsonData = $this->request->getJSON();
        if ($jsonData) {
            $jsonData = json_encode($jsonData);
            $jsonData = json_decode($jsonData, true);
            $ClientsOrderModel = new ClientsOrderModel();
            $id = $ClientsOrderModel->insert($jsonData);

            $real_estate_unit_rooms_json = $jsonData['real_estate_unit_rooms_json'];
            $real_estate_unit_rooms_json = json_decode($real_estate_unit_rooms_json, true);

            $RoomsPerOrderModel = new RoomsPerOrderModel();
            $RoomsPerOrderModel->where('client_order_id', $id)->delete();
            // echo json_encode($real_estate_unit_rooms_json);
            // die;

            for ($i = 0; $i < count($real_estate_unit_rooms_json); $i++) {
                # code...
                if ($real_estate_unit_rooms_json[$i]['count_of_rooms'] > 1) {
                    for ($k = 1; $k <= $real_estate_unit_rooms_json[$i]['count_of_rooms']; $k++) {
                        # code...
                        $RoomsPerOrderData = [
                            "client_order_id" => $id,
                            "user_id" => $jsonData['user_id'],
                            "room_type_id" => $real_estate_unit_rooms_json[$i]['room_type_id'],
                            "room_type_title" => $real_estate_unit_rooms_json[$i]['room_type_title'],
                            "length" => "",
                            "width" => "",
                            "height" => "",
                            "design_price_id" => "",
                            "price_per_square_meter" => "",
                            "square_meters" => "",
                            "total_cost_of_room_finishing" => ""
                        ];
                        $RoomsPerOrderModel->insert($RoomsPerOrderData);
                    }
                } else {
                    $RoomsPerOrderData = [
                        "client_order_id" => $id,
                        "user_id" => $jsonData['user_id'],
                        "room_type_id" => $real_estate_unit_rooms_json[$i]['room_type_id'],
                        "room_type_title" => $real_estate_unit_rooms_json[$i]['room_type_title'],
                        "length" => "",
                        "width" => "",
                        "height" => "",
                        "design_price_id" => "",
                        "price_per_square_meter" => "",
                        "square_meters" => "",
                        "total_cost_of_room_finishing" => ""
                    ];
                    $RoomsPerOrderModel->insert($RoomsPerOrderData);
                }
            }
            $jsonData['client_order_id'] = $id;
            return $this->respond($jsonData, 200);
        }
        // error message
        $data = ["error" => true, "message" => "data required"];
        return $this->respond($data, 200);
    }

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
            $dataToUpdate = $jsonData['orderData'];
            $ClientsOrderModel->update($id, $dataToUpdate);
            $id = $OrderData['client_order_id'];
            $user_id = $OrderData['user_id'];

            // echo json_encode($jsonData);die; // 
            $real_estate_unit_rooms_json = $jsonData['real_estate_unit_rooms_json'];
            // $real_estate_unit_rooms_json = json_decode($real_estate_unit_rooms_json, true);

            $RoomsPerOrderModel = new RoomsPerOrderModel();
            $RoomsPerOrderModel->where('client_order_id', $id)->delete();
            // echo json_encode($real_estate_unit_rooms_json);
            // die;

            for ($i = 0; $i < count($real_estate_unit_rooms_json); $i++) {
                # code...
                $RoomsPerOrderData = [
                    "client_order_id" => $id,
                    "user_id" => $user_id,
                    "room_type_id" => $real_estate_unit_rooms_json[$i]['room_type_id'],
                    "room_type_title" => $real_estate_unit_rooms_json[$i]['room_type_title'],
                    "length" => $real_estate_unit_rooms_json[$i]['length'],
                    "width" => $real_estate_unit_rooms_json[$i]['width'],
                    "height" => $real_estate_unit_rooms_json[$i]['height'],
                    "design_price_id" => $real_estate_unit_rooms_json[$i]['design_price_id'],
                    "price_per_square_meter" => $real_estate_unit_rooms_json[$i]['price_per_square_meter'],
                    "square_meters" => $real_estate_unit_rooms_json[$i]['square_meters'],
                    "total_cost_of_room_finishing" => $real_estate_unit_rooms_json[$i]['total_cost_of_room_finishing']
                ];
                $RoomsPerOrderModel->insert($RoomsPerOrderData);
            }
            $jsonData['client_order_id'] = $id;
            return $this->respond($jsonData, 200);
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
