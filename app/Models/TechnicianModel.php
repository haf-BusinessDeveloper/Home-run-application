<?php

namespace App\Models;

use CodeIgniter\Model;

class TechnicianModel extends Model
{
    protected $table      = 'technicians_table';
    protected $primaryKey = 'technician_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        
        "technician_email",
        "password",
        "full_name",
        "service_id",
        "phone_number",
        "address",
        "is_whats_available",
        "technician_status",
        "technician_created_at",
        "technician_created_by",
        "technician_updated_at",
        "technician_updated_by",
        "technician_deleted_at",


    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'technician_created_at';
    protected $updatedField  = 'technician_updated_at';
    protected $deletedField  = 'technician_deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}