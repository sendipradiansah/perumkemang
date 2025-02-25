<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $session = session();
        // $data['username'] = $session()->get('username');
        return view('home_view');
        // return view('login_view');

    }
}
