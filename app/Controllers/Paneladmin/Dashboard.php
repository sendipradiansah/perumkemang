<?php

namespace App\Controllers\Paneladmin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('panel_admin/dashboard_view');
    }
}

?>
