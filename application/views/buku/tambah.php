<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Form Input Buku</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Buku</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('buku/tambah'); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control">
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
                                    <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Lokasi Rak</label>
                            <input type="text" name="lokasi_rak" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Buku</button>
                <a href="<?= base_url('buku'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>