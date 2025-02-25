<?php

namespace App\Controllers\Paneladmin;
use App\Libraries\Uuid;
use App\Controllers\BaseController;
use App\Models\KontenModel;

class Video extends BaseController
{
    public function index(): string
    {
        $profilModel = new KontenModel();
        $data['konten'] = $profilModel->findAll();
        return view('panel_admin/video/video_view', $data);
    }

    public function add(){
        return view('panel_admin/profil_add_view');
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
            return view('panel_admin/profil_add_view', ['validation' => $this->validator]);
        }

        
    }
    public function edit($id){
        $videoModel = new KontenModel();
        $data['video'] = $videoModel->find($id);
        return view('panel_admin/video/video_edit_view', $data);
    }
    public function update($id){

        $videoModel = new KontenModel();
        $validation = \Config\Services::validation();
        $validation = $this->validate([
            'content' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Video harus diisi!',
                ],
            ]
        ]);


        if($validation){
            $videoModel->update($id, [
                'video'      => $this->request->getPost('content'),
            ]);
            return redirect()->to('paneladmin/video');
        }else{
            // $errors = $validation->getErrors();
            return view('panel_admin/video/video_edit_view', [
                'profil'       => $videoModel->find($id),
                'validation' => $this->validator
            ]);
        }
    }

    public function delete($id){
        $profilModel = new KontenModel();
        $profilModel->delete($id);
       
        return redirect()->to('paneladmin/video');
    }

}
?>