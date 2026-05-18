<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Edit Anggota</h2>

    <div class="card shadow">
        <div class="card-body">

            <form method="post" action="<?= site_url('anggota/update/'.$anggota->id); ?>">

                <div class="form-group mb-3">
                    <label>Nama Anggota</label>
                    <input type="text" name="nama" class="form-control"
                        value="<?= $anggota->nama; ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required><?= $anggota->alamat; ?></textarea>
                </div>

                <div class="form-group mb-3">
                    <label>Kontak</label>
                    <input type="text" name="telepon" class="form-control"
                    value="<?= $anggota->telepon; ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                    value="<?= $anggota->email; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= site_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>