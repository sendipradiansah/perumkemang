<?php

namespace App\Models;
use CodeIgniter\Model;

class UserGroupModel extends Model{
    protected $table = 'user_group';
    protected $primaryKey = 'id_group'; 
    protected $allowedFields = ['id_group','group_name', 'status'];
}

?>