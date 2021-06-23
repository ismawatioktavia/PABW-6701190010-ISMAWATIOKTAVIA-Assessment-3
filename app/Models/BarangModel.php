<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $allowedFields = ['nama_barang', 'stok', 'harga_minggu', 'harga_bulan', 'deskripsi'];

    // public function getBarang($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['id' => $id])->first();
    // }

    function ambildata($id)
    {
        return $this->db->table('barang')->getWhere(['id' => $id]);
    }

    function editdata($data, $id)
    {
        return $this->db->table('barang')->update($data, ['id' => $id]);
    }
}
