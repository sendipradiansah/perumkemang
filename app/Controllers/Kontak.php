<?php

namespace App\Controllers;

use App\Models\KontenModel;

class Kontak extends BaseController
{
    public function index(): string
    {
        $kontakModel = new KontenModel();
        $data['konten'] = $kontakModel->findAll();
        return view('kontak_view', $data);
    }
}
