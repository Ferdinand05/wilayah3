<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $allowedFields = ['id', 'nama', 'lingkungan', 'jabatan', 'status', 'alamat'];


    public function search($keyword)
    {
        $builder = $this->table('orang');
        $builder->like('nama', $keyword)->orLike('lingkungan', $keyword)->orLike('status', $keyword);
        return $builder;
    }
}
