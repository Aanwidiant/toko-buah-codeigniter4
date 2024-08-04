<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{
    public function index()
    {
        $users = new UsersModel();
        $data['users'] = $users->findAll();
        echo view('admin_view/template/header');
        echo view('admin_view/template/sidebar');
        echo view('admin_view/adm_users', $data);
        echo view('admin_view/user_update');
        echo view('admin_view/pop_up');
        echo view('admin_view/template/footer');
    }

    function editUser($user_id)
    {
        $users = new UsersModel();
        $data = $users->find($user_id);
        return $this->response->setJSON($data);
    }

    public function refreshUser($user_id)
    {
        $usersModel = new UsersModel();
        $user = $usersModel->find($user_id);

        return $this->response->setJSON($user);
    }

    public function saveUpdate()
    {
        $users = new UsersModel();

        $user_id = $this->request->getPost('user_id');
        $role = $this->request->getPost('role');
        $data = [
            'lv_id' => $role,
        ];

        try {
            $users->update($user_id, $data);
            // respons JSON berhasil
            return $this->response->setJSON(['status' => 'success']);
        } catch (\Exception $e) {
            // respons JSON error
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function deleteUser($user_id)
    {
        $usersModel = new UsersModel();
        try {
            $usersModel->delete($user_id);
            // respons JSON berhasil
            return $this->response->setJSON(['status' => 'success']);
        } catch (\Exception $e) {
            //  respons JSON error
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
