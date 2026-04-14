<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Tambah Data Buku</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= site_url('buku/tambah'); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" value="<?= set_value('kode_buku'); ?>" required>
                            <small class="text-danger"><?= form_error('kode_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="judul" class="form-control" value="<?= set_value('judul'); ?>" required>
                            <small class="text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="<?= set_value('penulis'); ?>" required>
                            <small class="text-danger"><?= form_error('penulis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" name="penerbit" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="number" name="tahun" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach($kategori as $k) : ?>
                                    <option value="<?= $k['id']; ?>"><?= $k['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="stok" class="form-control" value="<?= set_value('stok'); ?>" required>
                            <small class="text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Lokasi Rak</label>
                            <input type="text" name="lokasi_rak" class="form-control">
                        </div>
                    </div>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('buku'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>