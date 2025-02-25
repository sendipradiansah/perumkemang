<?php

namespace App\Controllers\Paneladmin;
use App\Libraries\Uuid;
use App\Controllers\BaseController;
use App\Models\KontenModel;

class Denah extends BaseController
{
    public function index(): string
    {
        $denahModel = new KontenModel();
        $data['konten'] = $denahModel->findAll();
        return view('panel_admin/denah/denah_view', $data);
    }

    public function add(){
        return view('panel_admin/denah/denah_add_view');
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
            return redirect()->to('paneladmin/profil');
        }else{
            // $errors = $validation->getErrors();
            return view('panel_admin/denah/denah_add_view', ['validation' => $this->validator]);
        }

        
    }
    public function edit($id){
        $profilModel = new KontenModel();
        $data['denah'] = $profilModel->find($id);
        return view('panel_admin/denah/denah_edit_view', $data);
    }
    public function update($id){

        $denahModel = new KontenModel();
        $validation = \Config\Services::validation();
        $validation = $this->validate([
            'content' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'denah harus diisi!',
                ],
            ]
        ]);


        if($validation){
            $denahModel->update($id, [
                'denah'      => $this->request->getPost('content'),
            ]);
            return redirect()->to('paneladmin/denah');
        }else{
            // $errors = $validation->getErrors();
            return view('panel_admin/denah/denah_edit_view', [
                'denah'       => $denahModel->find($id),
                'validation' => $this->validator
            ]);
        }
    }

    public function delete($id){
        $profilModel = new KontenModel();
        $profilModel->delete($id);
       
        return redirect()->to('paneladmin/denah');
    }

}
?>