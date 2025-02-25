<?php

namespace App\Controllers\Paneladmin;
use App\Controllers\BaseController;
use App\Models\UserGroupModel;

class UserGroup extends BaseController{
    public function index(): string{    

        $userGroup = new UserGroupModel();
        $data['userGroups'] = $userGroup->findAll();

        return view('panel_admin/user_group_view', $data);
    }

    // public function delete($id_group){
    //     $userGroup = new UserGroupModel();
    //     $userGroup->delete($id_group);
    //     return redirect()->to('/paneladmin/usergroup');
        
    // }

}


?>