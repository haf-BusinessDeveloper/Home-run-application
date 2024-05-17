<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientsOrderModel extends Model
{
    protected $table      = 'clients_orders_table';
    protected $primaryKey = 'client_order_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        
        "user_id",
        "real_estate_unit_type",
        "client_email",
        "client_full_name",
        "client_phone_number",
        "client_address",
        "location_latitude",
        "location_longitude",
        "client_order_details",
        "preferred_payment_method",
        "real_estate_unit_rooms_json",
        "total_unit_finishing_cost",
        "proposed_deadline_for_deleivery",
        "admin_notes",
        "order_details",

        "has_a_contract",
        "contract_details",
        
        "client_order_status",
        "client_order_created_at",
        "client_order_created_by",
        "client_order_updated_at",
        "client_order_updated_by",
        "client_order_deleted_at",

    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'client_order_created_at';
    protected $updatedField  = 'client_order_updated_at';
    protected $deletedField  = 'client_order_deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}