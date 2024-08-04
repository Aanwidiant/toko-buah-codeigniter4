<?php

namespace App\Models;

use CodeIgniter\Model;

class Products extends Model
{
    protected $table = "products";
    protected $primaryKey = "prd_id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['prd_id', 'nama_produk', 'produk_img', 'deskripsi', 'harga', 'qty', 'stok'];

    public function countProducts()
    {
        return $this->countAllResults();
    }
}
