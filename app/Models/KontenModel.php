<?php

namespace App\Models;
use CodeIgniter\Model;

class KontenModel extends Model{
    protected $table = 'konten';
    // protected $returnType = "object";
    protected $allowedFields = ['id', 'profil', 'denah', 'video', 'kontak'];
}

?>