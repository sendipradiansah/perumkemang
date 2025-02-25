<?php

namespace App\Controllers\Paneladmin;
use App\Libraries\Uuid;
use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->where('status <', 9)->findAll();

        return view('panel_admin/user/user_view', $data);
    }

    public function add(){
        return view('panel_admin/user/user_add_view');
    }

    public function insert(){
        $validation = \Config\Services::validation();
        $uuid = new Uuid();
        $now = date("Y-m-d H:i:s");

        $validation = $this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi!',
                ],
            ],
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username harus diisi!',
                ],
            ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password harus diisi!',
                ],
            ],
        ]);


        if($validation){
            $userModel = new UserModel();
            $userModel->insert([
                'id'        => $uuid->v4(),
                'nama'      => $this->request->getPost('nama'),
                'username'  => $this->request->getPost('username'),
                'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'status'    => 1, 
            ]);
            return redirect()->to('paneladmin/user');
        }else{
            // $errors = $validation->getErrors();
            return view('panel_admin/user_add_view', ['validation' => $this->validator]);
        }

        
    }

    public function edit($id){
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        return view('panel_admin/user/user_edit_view', $data);
    }

    public function delete($id){
        $userModel = new UserModel();
        // $userModel->delete($id);
        $userModel->update($id, [
            'status'      => 9,
        ]);
        return redirect()->to('paneladmin/user');
    }

    public function update($id){

        $userModel = new UserModel();
        $validation = \Config\Services::validation();
        $validation = $this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi!',
                ],
            ],
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username harus diisi!',
                ],
            ],
        ]);


        if($validation){
            $userModel->update($id, [
                'nama'      => $this->request->getPost('nama'),
                'username'  => $this->request->getPost('username'),
                'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'status'    => $this->request->getPost('status'),
            ]);
            return redirect()->to('paneladmin/user');
        }else{
            // $errors = $validation->getErrors();
            return view('panel_admin/user/user_add_view', [
                'user'       => $userModel->find($id),
                'validation' => $this->validator
            ]);
        }
    }
}

?>
