<?php

namespace App\Controllers;

use App\Models\Products;

class Home extends BaseController
{

    public function index()
    {
        $product = new Products();
        $data['product'] = $product->findAll();
        echo view('user_view/template/header');
        echo view('user_view/home');
        echo view('user_view/about');
        echo view('user_view/product', $data);
        echo view('user_view/template/footer');
    }
}
