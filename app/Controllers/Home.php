<?php

namespace App\Controllers;

use App\Models\BarangModel;
use Config\View;

class Home extends BaseController
{
	protected $barangModel;
	public function __construct()
	{
		$this->barangModel = new BarangModel();
	}

	public function index()
	{
		$barang = $this->barangModel->findAll();

		$data = [
			'title' => 'Home | Ismawati Oktavia',
			'barang' => $barang
		];
		return view('pages/barang', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Barang | Ismawati Oktavia'
		];
		return view('pages/create', $data);
	}

	public function save()
	{
		// validasi input
		if (!$this->validate([
			'nama_barang' => 'required',
			'stok' => 'required',
			'harga_minggu' => 'required',
			'harga_bulan' => 'required',
			'deskripsi' => 'required',
		])) {
			return redirect()->to('/home/create');
		}

		$this->barangModel->save([
			'nama_barang' => $this->request->getVar('nama_barang'),
			'stok'		  => $this->request->getVar('stok'),
			'harga_minggu' => $this->request->getVar('harga_minggu'),
			'harga_bulan' => $this->request->getVar('harga_bulan'),
			'deskripsi' => $this->request->getVar('deskripsi')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan ^_^');

		return redirect()->to('/home');
	}

	public function delete($id)
	{
		$this->barangModel->delete($id);
		return redirect()->to('/home');
	}

	public function edit($id)
	{
		$barang = new BarangModel();
		$ambildata = $barang->ambildata($id);

		if (count($ambildata->getResult()) > 0) {
			$row = $ambildata->getRow();
			$data = [
				'title' => 'Form Edit Data Barang | Ismawati Oktavia',
				'nama_barang' => $row->nama_barang,
				'stok' => $row->stok,
				'harga_minggu' => $row->harga_minggu,
				'harga_bulan' => $row->harga_bulan,
				'deskripsi' => $row->deskripsi
			];

			return view('pages/edit', $data);
		}
	}

	public function updatedata()
	{
		$id = $this->request->getpost('id');

		$data = [
			'nama_barang'  => $this->request->getpost('nama_barang'),
			'stok' 		   => $this->request->getpost('stok'),
			'harga_minggu' => $this->request->getpost('harga_minggu'),
			'harga_bulan'  => $this->request->getpost('harga_bulan'),
			'deskripsi'    => $this->request->getpost('deskripsi'),
		];

		$barang = new BarangModel();
		$update = $barang->editdata($data, $id);

		if ($update) {
			session()->setFlashdata('pesan', 'Data Berhasil Diubah ^_^');

			return redirect()->to('/home');
		}
	}
}
