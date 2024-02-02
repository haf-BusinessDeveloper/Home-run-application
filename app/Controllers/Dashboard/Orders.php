<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\ClientsOrderModel;
use App\Models\RoomsTypeModel;
use App\Models\DesignPriceModel;
use App\Models\RoomsPerOrderModel;

class Orders extends BaseController
{
    // public function index()
    // {
    //     return view('dashboard/pages/orders/home-page');
    // }

    public function create()
    {
        $UserModel = new UserModel();
        $data['clients_list'] = $UserModel->where('is_admin', null)->findAll();
        $RoomsTypeModel = new RoomsTypeModel();
        $data['RoomsTypes_list'] = $RoomsTypeModel->findAll();


        $dataPosted = $this->request->getPost();
        if ($dataPosted) {
            $ClientsOrderModel = new ClientsOrderModel();
            $id = $ClientsOrderModel->insert($dataPosted);

            $real_estate_unit_rooms_json = $dataPosted['real_estate_unit_rooms_json'];
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
                            "user_id" => $dataPosted['user_id'],
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
                        "user_id" => $dataPosted['user_id'],
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
            return redirect()->to('dashboard/orders/step2/' . $id);
        }
        return view('dashboard/pages/orders/create-page', $data);
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


        $dataPosted = $this->request->getPost();
        $ClientsOrderModel = new ClientsOrderModel();
        if ($dataPosted) {
            $ClientsOrderModel->update($id, $dataPosted);
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
        return view('dashboard/pages/orders/list-page');
    }

    public function trash()
    {
        return view('dashboard/pages/orders/list-trash-page');
    }
}
