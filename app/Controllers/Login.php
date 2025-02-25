<?php
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController{

    public function index(){
        // helper(['form']);
        return view('login_view');
    }

    public function auth(){
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $model->where(['username' => $username])->first();
        if($data){
            // $passwordDB = password_hash('sendi', PASSWORD_DEFAULT);
            // print_r($passwordDB);exit;
            $passwordDB = $data['password'];
            $verify_password = password_verify($password, $passwordDB);
            if($verify_password){
                $session_data = [
                    'nama' => $data['nama'],
                    'username' => $data['username'],
                    'website_admin_logged_in' => TRUE

                ];
                $session->set($session_data);
                return redirect()->to('/paneladmin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Maaf, password yang anda masukkan salah!');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Maaf, Username tidak ditemukan!');
            return redirect()->to('/login');

        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
        
    }
}

?>