<?php

namespace App\Models;

use CodeIgniter\Model;

class ShopCart extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'cr_id';
    protected $returnType = "object";
    protected $allowedFields = ['cr_id', 'user_id', 'prd_id', 'qty_item'];
}
