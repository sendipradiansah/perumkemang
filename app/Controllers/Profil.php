<?php

namespace App\Controllers;

use App\Models\KontenModel;

class Profil extends BaseController
{
    public function index(): string
    {
        $profilModel = new KontenModel();
        $data['konten'] = $profilModel->findAll();
        return view('profil_view', $data);
    }
}
