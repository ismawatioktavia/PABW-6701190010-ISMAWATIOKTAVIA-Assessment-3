<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread" style="margin:70px; color:#D83A56;"><b>- DAFTAR BARANG BABY DAILY -</b></h1>
                </div>
            </div>

            <div class="container py-4">

                <div class="card" style="border-radius:10px;">
                    <div class="card-body">
                        <a href="/home/create" class="btn btn-primary mb-3">Tambah Data Barang</a>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" , style="vertical-align: middle;">NO</th>
                                    <th scope="col" , style="vertical-align: middle;">Nama Barang</th>
                                    <th scope="col" , style="vertical-align: middle;">Stok</th>
                                    <th scope="col" , style="vertical-align: middle;">Harga Sewa Perminggu</th>
                                    <th scope="col" , style="vertical-align: middle;">Harga Sewa Perbulan</th>
                                    <th scope="col" , style="vertical-align: middle;">Deskripsi</th>
                                    <th scope="col" , style="vertical-align: middle;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($barang as $b) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $b['nama_barang']; ?></td>
                                        <td><?= $b['stok']; ?></td>
                                        <td><?= $b['harga_minggu']; ?></td>
                                        <td><?= $b['harga_bulan']; ?></td>
                                        <td><?= $b['deskripsi']; ?></td>
                                        <td>
                                            <a href="/home/edit/<?= $b['id']; ?>" class="btn btn-sm btn-success mb-2">Edit</a>
                                            <a href="/home/delete/<?= $b['id']; ?>" class="btn btn-sm btn-danger mb-2">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>