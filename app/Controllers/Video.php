<?php

namespace App\Controllers;

use App\Models\KontenModel;

class Video extends BaseController
{
    public function index(): string
    {
        $videoModel = new KontenModel();
        $data['konten'] = $videoModel->findAll();
        return view('video_view', $data);
    }
}
