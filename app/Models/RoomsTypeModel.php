<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomsTypeModel extends Model
{
    protected $table      = 'rooms_types_table';
    protected $primaryKey = 'room_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = [
        
        "room_type_title"

    ];

}