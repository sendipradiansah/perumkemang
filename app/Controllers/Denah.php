<?php

namespace App\Controllers;

use App\Models\KontenModel;

class Denah extends BaseController
{
    public function index(): string
    {
        $denahModel = new KontenModel();
        $data['konten'] = $denahModel->findAll();
        return view('denah_view', $data);
    }
}
