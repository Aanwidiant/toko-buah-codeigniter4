<?php

namespace App\Controllers;

use App\Models\ShopCart;
use App\Models\Products;
use CodeIgniter\Controller;

class ShoppingCart extends Controller
{

    public function viewCart()
    {
        $cart = new ShopCart();
        $products = new Products();
        $user_id = session()->get('user_id');

        $cartItems = $cart->where('user_id', $user_id)->findAll();

        $data['cart'] = [];

        foreach ($cartItems as $item) {
            $product = $products->find($item->prd_id);
            $item->nama_produk = $product->nama_produk;
            $item->produk_img = $product->produk_img;
            $item->harga = $product->harga;
            $data['cart'][] = $item;
        }

        echo view('user_view/dashboard/template/header-user');
        echo view('user_view/dashboard/template/sidebar-user');
        echo view('user_view/dashboard/keranjang_belanja', $data);
        echo view('user_view/dashboard/checkoutverif');
        echo view('user_view/dashboard/template/footer-user');
    }

    public function addToCart()
    {

        $cart = new ShopCart();

        $user_id = session()->get('user_id');
        $prd_id = $this->request->getPost('prd_id');
        $qty_item = $this->request->getPost('qty_item');

        $lastCart = $cart->orderBy('cr_id', 'DESC')->first();
        if ($lastCart) {
            $lastId = (int) substr($lastCart->cr_id, 2);
            $newId = 'cr' . str_pad($lastId + 1, 2, '0', STR_PAD_LEFT);
        } else {
            $newId = 'cr01';
        }

        $data = [
            'cr_id' => $newId,
            'user_id' => $user_id,
            'prd_id' => $prd_id,
            'qty_item' => $qty_item,
        ];

        $existingCartItem = $cart->where('user_id', $user_id)
            ->where('prd_id', $prd_id)
            ->first();

        if ($existingCartItem) {
            $cart->update(
                $existingCartItem->cr_id,
                [
                    'qty_item' => $existingCartItem->qty_item + $qty_item
                ]

            );
            return $this->response->setJSON(['status' => 'success', 'message' => 'Product add cart successfully']);
        } else {
            $cart->insert($data);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Product add cart successfully']);
        }
    }

    public function deleteCart()
    {
        $cart = new ShopCart();

        $user_id = session()->get('user_id');

        $prd_id = $this->request->getPost('prd_id');

        $existingCartItem = $cart->where('user_id', $user_id)
            ->where('prd_id', $prd_id)
            ->first();

        if ($existingCartItem) {
            $cart->delete($existingCartItem->cr_id);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Produk berhasil dihapus dari keranjang']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Produk tidak ditemukan dalam keranjang']);
        }
    }
}
