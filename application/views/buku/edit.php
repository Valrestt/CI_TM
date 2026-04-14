<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Edit Data Buku</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= site_url('buku/update/'.$buku['id_buku']); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" value="<?= $buku['kode_buku']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="judul" class="form-control" value="<?= $buku['judul_buku']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="<?= $buku['penulis']; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <?php foreach($kategori as $k) : ?>
                                    <option value="<?= $k['id']; ?>" <?= ($k['id'] == $buku['id_kategori']) ? 'selected' : ''; ?>>
                                        <?= $k['nama_kategori']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="stok" class="form-control" value="<?= $buku['stok']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Lokasi Rak</label>
                            <input type="text" name="lokasi_rak" class="form-control" value="<?= $buku['lokasi_rak']; ?>">
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="<?= site_url('buku'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>