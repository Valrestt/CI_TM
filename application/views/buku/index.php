<style>
#dataTable thead th{
    background-color:#6b6d7d !important;
    color:#ffffff !important;
    border-color:#858796 !important;
    vertical-align:middle;
    font-weight:700;
    text-align:center;
}
</style>
<div class="container-fluid">

    <!-- Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">
        Data Buku
        </h2>

        <a href="<?= site_url('buku/tambah'); ?>" 
        class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Buku
        </a>
    </div>

    <!-- Card -->
    <div class="card shadow mb-4">

        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Daftar Koleksi Buku
            </h6>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover"
                    id="dataTable"
                    width="100%"
                    cellspacing="0">

                    <!-- Table Head -->
                    <thead>
                        <tr class="text-center">
                            <th width="5%">No</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody>

                        <?php $no = 1; ?>
                        <?php foreach($buku as $b): ?>

                        <tr>
                            <td class="text-center">
                                <?= $no++; ?>
                            </td>
                            <td>
                                <code><?= $b->kode_buku; ?></code>
                            </td>
                            <td>
                                <?= $b->judul; ?>
                            </td>
                            <td>
                                <?= $b->penulis; ?>
                            </td>
                            <td>
                                <span class="badge badge-info">
                                    <?= $b->nama_kategori; ?>
                                </span>
                            </td>
                            <td class="text-center font-weight-bold">
                                <?= $b->stok; ?>
                            </td>
                            <td class="text-center">

                                <!-- Button Edit -->
                                <a href="<?= site_url('buku/edit/'.$b->kode_buku); ?>"
                                class="btn btn-sm btn-warning text-white">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <!-- Button Hapus -->
                                <a href="<?= base_url('buku/hapus/'.$b->kode_buku); ?>"
                                class="btn btn-danger btn-sm btn-hapus">
                                    <i class="fas fa-trash"></i>
                                    Hapus
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