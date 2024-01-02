<?php

namespace App\Models;

use CodeIgniter\Model;

class DesignPriceModel extends Model
{
    protected $table      = 'designs_prices_table';
    protected $primaryKey = 'design_price_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        
        "room_type_id",
        "design_image",
        "price_per_square_meter",
        "design_price_created_at",
        "design_price_created_by",
        "design_price_updated_at",
        "design_price_updated_by",
        "design_price_deleted_at",      

    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'design_price_created_at';
    protected $updatedField  = 'design_price_updated_at';
    protected $deletedField  = 'design_price_deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}