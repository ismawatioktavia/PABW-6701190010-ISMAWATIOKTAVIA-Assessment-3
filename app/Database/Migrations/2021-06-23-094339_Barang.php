<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nama_barang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'stok'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'harga_minggu'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'harga_bulan'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'deskripsi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('barang');
	}

	public function down()
	{
		$this->forge->dropTable('barang');
	}
}
