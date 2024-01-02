<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomsPerOrderModel extends Model
{
    protected $table      = 'rooms_per_order_table';
    protected $primaryKey = 'room_per_order_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        
        "client_order_id",
        "user_id",
        "room_type_id",
        "length",
        "width",
        "height",
        "price_per_square_meter",
        "square_meters",
        "total_cost_of_room_finishing",
        "room_per_order_created_at",
        "room_per_order_created_by",
        "room_per_order_updated_at",
        "room_per_order_updated_by",
        "room_per_order_deleted_at",

    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'room_per_order_created_at';
    protected $updatedField  = 'room_per_order_updated_at';
    protected $deletedField  = 'room_per_order_deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}