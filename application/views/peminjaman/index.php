<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">Data Peminjaman</h2>

        <a href="<?= site_url('peminjaman/tambah'); ?>" 
        class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>

    <!-- Card Tabel -->
    <div class="card shadow mb-4">

        <!-- Header Card -->
        <div class="card-header py-3 d-flex justify-content-between align-items-center">

            <h6 class="m-0 font-weight-bold text-primary">
                Data Peminjaman Buku
            </h6>

            <div class="d-flex align-items-center">

                <!-- Search -->
                <input type="text"
                    class="form-control form-control-sm mr-2"
                    placeholder="Cari data..."
                    onkeyup="cariData(this.value)">

                <!-- Jumlah Data -->
                <span id="jumlahData"
                    class="badge badge-primary p-2">
                </span>

            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <?= $this->session->flashdata('success'); ?>
                        <button type="button"
                                class="close"
                                data-dismiss="alert">
                            <span>&times;</span>
                        </button>

                    </div>
                <?php endif; ?>

                <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <?= $this->session->flashdata('error'); ?>
                        <button type="button"
                                class="close"
                                data-dismiss="alert">
                            <span>&times;</span>
                        </button>

                    </div>
                <?php endif; ?>

                <table class="table table-bordered table-hover"
                    id="dataTable"
                    width="100%"
                    cellspacing="0">
                    <thead class="thead-dark">

                        <tr>
                            <th>No</th>
                            <th>Kode Peminjaman</th>
                            <th>Nama Anggota</th>
                            <th>Tanggal Pinjam</th>
                            <th>Jatuh Tempo</th>
                            <th>Status</th>
                            <th>Keterlambatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; foreach($data as $d): ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d->kode_peminjaman; ?></td>
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->tanggal_pinjam; ?></td>
                            <td><?= $d->tanggal_jatuh_tempo; ?></td>
                            <td>

                                <?php if($d->status == 'dipinjam'): ?>
                                    <span class="badge badge-warning">
                                        Dipinjam
                                    </span>

                                <?php else: ?>
                                    <span class="badge badge-success">
                                        Dikembalikan
                                    </span>

                                <?php endif; ?>
                            </td>

                            <td>
                                <?php
                                $today = date('Y-m-d');

                                // PERBAIKAN
                                $selisih = strtotime($today) - strtotime($d->tanggal_jatuh_tempo);
                                $terlambat = $selisih > 0
                                    ? floor($selisih / 86400)
                                    : 0;
                                ?>

                                <?php if($terlambat > 0): ?>
                                    <span class="badge badge-danger">
                                        <?= $terlambat; ?> Hari
                                    </span>
                                <?php else: ?>
                                    <span class="badge badge-success">
                                        Tepat Waktu
                                    </span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <?php if($d->status == 'dipinjam'): ?>
                                    <a href="<?= site_url('peminjaman/kembali/'.$d->id); ?>"
                                    class="btn btn-success btn-sm"
                                    onclick="return confirm('Konfirmasi pengembalian buku ini?')">
                                        Kembalikan

                                    </a>
                                    <a href="<?= site_url('whatsapp/kirim_notifikasi/'.$d->id); ?>"
                                    class="btn btn-warning btn-sm">
                                        <i class="fab fa-whatsapp"></i>
                                        Kirim WA

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

<script>
    const rows = document.querySelectorAll('#dataTable tbody tr');
    document.getElementById('jumlahData').innerText =
        rows.length + ' data';

    function cariData(keyword) {
        const filter = keyword.toLowerCase();

        rows.forEach(row => {
            row.style.display =
                row.innerText.toLowerCase().includes(filter)
                ? ''
                : 'none';
        });
    }
</script>