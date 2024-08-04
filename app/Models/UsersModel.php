<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "user_id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'username', 'nama_lengkap', 'email', 'lv_id', 'password',];

    public function countUsers()
    {
        return $this->countAllResults();
    }
}
