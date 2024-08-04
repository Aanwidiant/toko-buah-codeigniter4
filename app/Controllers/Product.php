<?php

namespace App\Controllers;

use App\Models\Products;

class Product extends BaseController
{
    public function index()
    {
        $product = new Products();
        $data['product'] = $product->findAll();
        echo view('admin_view/template/header');
        echo view('admin_view/template/sidebar');
        echo view('admin_view/adm_products', $data);
        echo view('admin_view/product_create');
        echo view('admin_view/product_update');
        echo view('admin_view/pop_up');
        echo view('admin_view/template/footer');
    }

    function detailProduct($prd_id)
    {
        $product = new Products();
        $data = $product->find($prd_id);
        return $this->response->setJSON($data);
    }

    public function createProduct()
    {
        $products = new Products();

        $lastPrd = $products->orderBy('prd_id', 'DESC')->first();
        if ($lastPrd) {
            $lastId = (int) substr($lastPrd->prd_id, 3);
            $newId = 'prd' . str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newId = 'prd001';
        }

        $img = $this->request->getFile('produk_img');
        $imgName = $img->getName();
        $img->move('upload', $imgName);


        $data = [
            'prd_id' => $newId,
            'nama_produk' => $this->request->getPost('nama_produk'),
            'produk_img' => $imgName,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'qty' => $this->request->getPost('qty'),
            'stok' => $this->request->getPost('stok'),
        ];

        if ($products->insert($data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Product created successfully']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to create product']);
        }
    }

    public function saveUpdateProduct()
    {
        try {
            $products = new Products();

            $prd_id = $this->request->getPost('prd_id');
            $nama_produk = $this->request->getPost('nama_produk');
            $deskripsi = $this->request->getPost('deskripsi');
            $harga = $this->request->getPost('harga');
            $qty = $this->request->getPost('qty');
            $stok = $this->request->getPost('stok');
            $old_img = $this->request->getPost('old_img');
            $newImg = $this->request->getFile('produk_img');


            if ($newImg && $newImg->isValid() && !$newImg->hasMoved()) {
                if (!empty($old_img) && file_exists('upload/' . $old_img)) {
                    unlink('upload/' . $old_img);
                }
                $imgName = $newImg->getName();
                $newImg->move('upload', $imgName);
            } else {
                $imgName = $old_img;
            }

            $data = [
                'nama_produk' => $nama_produk,
                'produk_img' => $imgName,
                'deskripsi' => $deskripsi,
                'harga' => $harga,
                'qty' => $qty,
                'stok' => $stok,
            ];

            if ($products->update($prd_id, $data)) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Product updated successfully']);
            } else {
                throw new \Exception('Failed to update product');
            }
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function refreshProduct($prd_id)
    {
        $products = new Products();
        $product = $products->find($prd_id);

        return $this->response->setJSON($product);
    }

    public function deleteProduct($prd_id)
    {
        $products = new Products();

        try {
            $produkImgPath = $this->request->getPost('path');

            $product = $products->find($prd_id);

            if ($product && $products->delete($prd_id)) {

                if (!empty($produkImgPath) && file_exists('upload/' . $produkImgPath)) {
                    unlink('upload/' . $produkImgPath);
                }

                return $this->response->setJSON(['status' => 'success']);
            }

            throw new \Exception('Produk tidak ditemukan atau gagal dihapus.');
        } catch (\Exception $e) {

            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
