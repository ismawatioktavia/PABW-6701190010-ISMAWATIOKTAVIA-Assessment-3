<?= $this->extend('layout/navbar'); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread" style="margin:70px; color:#D83A56;"><b>- FORM UBAH BARANG -</b></h1>
                </div>
            </div>
        </div>
        <div class="container py-4">

            <div class="card" style="border-radius:10px;">
                <div class="card-body">
                    <form action="/home/updatedata" method="post">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" autofocus value="<?= $nama_barang; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stok" name="stok" value="<?= $stok; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga_minggu" class="col-sm-2 col-form-label">Harga Sewa Perminggu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga_minggu" name="harga_minggu" value="<?= $harga_minggu; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga_bulan" class="col-sm-2 col-form-label">Harga Sewa Perbulan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga_bulan" name="harga_bulan" value="<?= $harga_bulan; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $deskripsi; ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>