<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">Data Peminjaman</h2>

        <a href="<?= site_url('peminjaman/tambah'); ?>" 
        class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah Peminjaman
        </a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Daftar Data Peminjaman
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover"
                    id="dataTable"
                    width="100%"
                    cellspacing="0">

                    <thead class="thead-dark text-center">

                        <tr>
                            <th width="5%">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th width="15%">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php $no=1; foreach($data as $d): ?>

                        <tr>

                            <td class="text-center"><?= $no++ ?></td>

                            <td>
                                <code><?= $d->kode_peminjaman; ?></code>
                            </td>

                            <td><?= $d->nama; ?></td>

                            <td class="text-center">
                                <?= $d->tanggal_pinjam; ?>
                            </td>

                            <td class="text-center">

                                <?php if($d->status =='dipinjam'): ?>

                                    <span class="badge badge-warning px-3 py-2">
                                        Dipinjam
                                    </span>

                                <?php else: ?>

                                    <span class="badge badge-success px-3 py-2">
                                        Dikembalikan
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td class="text-center">

                                <?php if($d->status =='dipinjam'): ?>

                                    <a href="<?= site_url('peminjaman/kembali/'. $d->id); ?>"
                                    class="btn btn-success btn-sm">
                                        Kembalikan
                                    </a>

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>