<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="font-weight-bold text-dark mb-1">
                Laporan Peminjaman
            </h3>

            <p class="text-muted mb-0">
                Data laporan peminjaman buku
            </p>

        </div>

        <a href="<?= site_url('laporan/cetak_peminjaman?bulan='.$bulan); ?>"
        target="_blank"
        class="btn btn-success shadow-sm rounded-pill px-4">

            <i class="fas fa-file-pdf mr-1"></i>
            Cetak PDF

        </a>

    </div>

    <!-- Filter Card -->
    <div class="card border-0 shadow-sm rounded-lg mb-4">

        <div class="card-body">

            <form method="get">

                <div class="row align-items-end">

                    <div class="col-md-4 mb-2">

                        <label class="small text-muted mb-1">
                            Filter Bulan
                        </label>

                        <input type="month"
                        name="bulan"
                        value="<?= $bulan; ?>"
                        class="form-control shadow-sm border-0 bg-light">

                    </div>

                    <div class="col-md-4 mb-2">

                        <button type="submit"
                                class="btn btn-primary shadow-sm px-4">

                            <i class="fas fa-search mr-1"></i>
                            Filter

                        </button>

                        <a href="<?= site_url('laporan/peminjaman'); ?>"
                        class="btn btn-light border shadow-sm px-4">

                            Reset

                        </a>

                    </div>

                </div>

            </form>

        </div>

    </div>
    <!-- Table Card -->
    <div class="card border-0 shadow-sm rounded-lg">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr style="background:#f8f9fc;">

                            <th class="border-0 text-secondary">
                                No
                            </th>

                            <th class="border-0 text-secondary">
                                Kode
                            </th>

                            <th class="border-0 text-secondary">
                                Nama
                            </th>

                            <th class="border-0 text-secondary">
                                Tanggal
                            </th>

                            <th class="border-0 text-center text-secondary">
                                Status
                            </th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php $no=1; foreach($data as $d): ?>

                        <tr>

                            <td class="font-weight-bold text-muted">
                                <?= $no++; ?>
                            </td>

                            <td>

                                <span class="badge badge-light border px-3 py-2">

                                    <?= $d->kode_peminjaman; ?>

                                </span>

                            </td>

                            <td class="font-weight-bold text-dark">
                                <?= $d->nama_anggota; ?>
                            </td>

                            <td class="text-muted">
                                <?= $d->tanggal_pinjam; ?>
                            </td>

                            <td class="text-center">

                                <?php if($d->status == 'dipinjam'): ?>

                                    <span class="badge badge-warning px-3 py-2">
                                        Dipinjam
                                    </span>

                                <?php else: ?>

                                    <span class="badge badge-success px-3 py-2">
                                        Dikembalikan
                                    </span>

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