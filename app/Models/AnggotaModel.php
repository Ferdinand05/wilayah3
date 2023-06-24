<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $allowedFields = ['id', 'nama', 'lingkungan', 'jabatan', 'status', 'alamat'];
}
