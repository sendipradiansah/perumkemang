<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user';
    // protected $returnType = "object";
    protected $allowedFields = ['id', 'nama', 'username', 'password', 'status', 'created_date', 'created_user', 'modified_date', 'modified_date', 'id_group'];
}

?>