<?php

namespace App\Controllers;

use App\Models\Products;
use App\Models\UsersModel;

class Dashboard_C extends BaseController
{

    public function DashboardAdmin()
    {
        $users = new UsersModel();
        $data['userCount'] = $users->countUsers();
        $product = new Products();
        $data['productCount'] = $product->countProducts();
        echo view('admin_view/template/header');
        echo view('admin_view/template/sidebar');
        echo view('admin_view/adm_dashboard', $data, $data);
        echo view('admin_view/template/footer');
    }

    public function DashboardUser()
    {
        $user_id = session()->get('user_id');
        $users = new UsersModel();
        $data['user'] = $users->find($user_id);
        echo view('user_view/dashboard/template/header-user');
        echo view('user_view/dashboard/template/sidebar-user');
        echo view('user_view/dashboard/profile', $data);
        echo view('user_view/dashboard/template/footer-user');
    }
}
