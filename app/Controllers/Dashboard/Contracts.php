<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\ClientsOrderModel;
use App\Models\RoomsTypeModel;
use App\Models\DesignPriceModel;
use App\Models\RoomsPerOrderModel;

class Contracts extends BaseController
{

    public function create($id = null)
    {
        if ($id === null) {
            # code...
            return redirect()->back();
        }


        $postedData = $this->request->getPost();
        if ($postedData) {
            $ClientsOrderModel = new ClientsOrderModel();
            $OrderData = $ClientsOrderModel->where("client_order_id", $id)->first();
            $dataToUpdate = [
                "client_order_status" => "Contracted",
                "has_a_contract" => true,
                "contract_details" => $postedData['contract_details'],
            ];
            $ClientsOrderModel->update($id, $dataToUpdate);
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

        $data['orderData'] = $orderData;
        $data['id'] = $id;
        $data['real_estate_unit_rooms_json'] = json_encode($real_estate_unit_rooms_List);
        // echo(json_encode($data));die;
        return view('dashboard/pages/contracts/create-page', $data);
    }

    public function show($id = null)
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

        $data['orderData'] = $orderData;
        $data['id'] = $id;
        $data['real_estate_unit_rooms_json'] = json_encode($real_estate_unit_rooms_List);
        // echo(json_encode($data));die;
        return view('dashboard/pages/contracts/show-page', $data);
    }


    public function list()
    {
        $ClientsOrderModel = new ClientsOrderModel();
        $res = $ClientsOrderModel->where(['client_order_status' => "Contracted", 'has_a_contract' => 1])->findAll();
        $data['records'] = $res;
        // echo json_encode($data);die; // for testing onlys
        return view('dashboard/pages/contracts/list-page', $data);
    }

    public function trash()
    {
        return view('dashboard/pages/contracts/list-trash-page');
    }
}
