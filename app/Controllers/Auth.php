<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    public function register()
    {
        echo view('user_view/template/header');
        echo view('user_view/v_register');
        echo view('user_view/template/footer');
    }

    public function registerProcess()
    {
        if (!$this->validate([
            'username' => [
                'rules' =>
                'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username Harus diisi',
                    'min_length' => 'Username Minimal 4 Karakter',
                    'max_length' => 'Username Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Nama Lengkap Harus diisi',
                    'min_length' => 'Nama Lengkap Minimal 4 Karakter',
                    'max_length' => 'Nama Lengkap Maksimal 100 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email Harus diisi',
                    'valid_email' => 'Email Tidak valid',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => 'Password Harus diisi',
                    'min_length' => 'Password Minimal 4 Karakter',
                    'max_length' => 'Password Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $users = new UsersModel();
        $lastUser = $users->orderBy('user_id', 'DESC')->first();
        if ($lastUser) {
            $lastId = (int) substr($lastUser->user_id, 3);
            $newId = 'usr' . str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newId = 'usr001';
        }

        $users->insert([
            'user_id' => $newId,
            'username' => $this->request->getVar('username'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'email' => $this->request->getVar('email'),
            'lv_id' => 'lv_01',
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ]);
        return redirect()->to('login');
    }

    public function login()
    {
        if (session()->get('lv_id') == 'lv_02') {
            return redirect()->to('dashboard/adm');
        } elseif (session('username')) {
            return redirect()->to('dashboard/usr');
        }
        echo view('user_view/template/header');
        echo view('user_view/v_login');
        echo view('user_view/template/footer');
    }

    public function loginProcess()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if ((password_verify($password, $dataUser->password))) {
                session()->set([
                    'user_id' => $dataUser->user_id,
                    'username' => $dataUser->username,
                    'nama_lengkap' => $dataUser->nama_lengkap,
                    'lv_id' => $dataUser->lv_id,
                    'logged_in' => TRUE
                ]);
                if (session()->lv_id == 'lv_02') {
                    return redirect()->to('dashboard/adm');
                } else {
                    return redirect()->to('dashboard/usr');
                }
            } else {
                session()->setFlashdata('error', 'Username atau Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
