<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 text-gray-800">
                <b>Laporan Data Anggota</b>
            </h1>
            <p class="mb-0 text-muted">Data laporan anggota perpustakaan</p>
        </div>

        <a href="<?= site_url('laporan/cetak_anggota'); ?>"
        target="_blank"
        class="btn btn-success shadow-sm rounded-pill px-4">

    <i class="fas fa-file-pdf mr-1"></i> Cetak PDF

</a>
</div>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">

                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; foreach($anggota as $a): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b><?= $a->nama; ?></b></td>
                            <td><?= $a->email; ?></td>
                            <td><?= $a->telepon; ?></td>
                            <td><?= $a->alamat; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>