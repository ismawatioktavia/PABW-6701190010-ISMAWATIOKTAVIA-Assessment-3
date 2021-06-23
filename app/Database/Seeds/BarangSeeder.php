<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_barang'    => 'Stroller',
                'stok'           => '3',
                'harga_minggu'   => '30000',
                'harga_bulan'    => '100000',
                'deskripsi'      => 'Stroller merk Pliko untuk usia 0-5 tahun'
            ],
            [
                'nama_barang'    => 'Baby Bouncer',
                'stok'           => '2',
                'harga_minggu'   => '20000',
                'harga_bulan'    => '60000',
                'deskripsi'      => 'Baby bouncer merk Nuna Leaf untuk usia 0-1 tahun'
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO barang (nama_barang, stok, harga_minggu, harga_bulan, deskripsi) VALUES(:nama_barang:, :stok:, :harga_minggu:, :harga_bulan:, :deskripsi:)", $data);

        // Using Query Builder
        // $this->db->table('barang')->insert($data);
        $this->db->table('barang')->insertBatch($data);
    }
}
