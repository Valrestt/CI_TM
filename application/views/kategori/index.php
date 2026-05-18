<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">Data Kategori</h2>

        <a href="<?= site_url('kategori/tambah'); ?>" 
        class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah Kategori
        </a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Daftar Kategori Buku
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center align-middle"
                    id="dataTable"
                    width="100%"
                    cellspacing="0">

                    <thead class="text-center" style="background:#5f6272; color:white;">

                        <tr>
                            <th width="80">No</th>
                            <th>Nama Kategori</th>
                            <th width="220">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php $no=1; foreach($kategori as $k): ?>

                        <tr>

                            <td><?= $no++ ?></td>

                            <td class="text-center">
                                <?= $k->nama_kategori; ?>
                            </td>

                            <td class="text-center">

                                <a href="<?= site_url('kategori/edit/'.$k->id); ?>" 
                                class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <a href="<?= site_url('kategori/hapus/'.$k->id); ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('yakin?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>