<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 text-gray-800">
                <b>Laporan Data Buku</b>
            </h1>
            <p class="mb-0 text-muted">Data laporan buku perpustakaan</p>
        </div>

        <a href="<?= site_url('laporan/cetak_buku'); ?>"
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
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th>Lokasi Rak</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; foreach($buku as $b): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b->kode_buku; ?></td>
                            <td><b><?= $b->judul; ?></b></td>
                            <td><?= $b->penulis; ?></td>
                            <td><?= $b->penerbit; ?></td>
                            <td><?= $b->tahun; ?></td>
                            <td><?= $b->stok; ?></td>
                            <td><?= $b->lokasi_rak; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>