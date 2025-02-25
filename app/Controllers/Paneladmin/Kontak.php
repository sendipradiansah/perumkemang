<?php

namespace App\Controllers\Paneladmin;
use App\Libraries\Uuid;
use App\Models\KontenModel;
use App\Controllers\BaseController;

class Kontak extends BaseController
{
    public function index(): string
    {
        $kontakModel = new KontenModel();
        $data['konten'] = $kontakModel->findAll();
        return view('panel_admin/kontak/kontak_view', $data);
    }

    public function add(){
        return view('panel_admin/kontak/kontak_add_view');
    }

    public function insert(){
        $validation = \Config\Services::validation();
        $uuid = new Uuid();
        $now = date("Y-m-d H:i:s");

        $validation = $this->validate([
            'content' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Content harus diisi!',
                ],
            ]
        ]);


        if($validation){
            $userModel = new KontenModel();
            $userModel->insert([
                'id'        => $uuid->v4(),
                'profil'      => $this->request->getPost('content'),
            ]);
            return redirect()->to('paneladmin/kontak');
        }else{
            // $errors = $validation->getErrors();
            return view('panel_admin/kontak/kontak_add_view', ['validation' => $this->validator]);
        }

        
    }
    public function edit($id){
        $profilModel = new KontenModel();
        $data['kontak'] = $profilModel->find($id);
        return view('panel_admin/kontak/kontak_edit_view', $data);
    }
    public function update($id){

        $kontakModel = new KontenModel();
        $validation = \Config\Services::validation();
        $validation = $this->validate([
            'content' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kontak harus diisi!',
                ],
            ]
        ]);


        if($validation){
            $kontakModel->update($id, [
                'kontak'      => $this->request->getPost('content'),
            ]);
            return redirect()->to('paneladmin/kontak');
        }else{
            // $errors = $validation->getErrors();
            return view('panel_admin/kontak/kontak_edit_view', [
                'kontak'       => $kontakModel->find($id),
                'validation' => $this->validator
            ]);
        }
    }

    public function delete($id){
        $kontakModel = new KontenModel();
        $kontakModel->delete($id);
       
        return redirect()->to('paneladmin/kontak');
    }

}
?>