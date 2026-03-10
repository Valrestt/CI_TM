<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Data Kategori</h2>

<a href="<?= site_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i>Tambah</a>

    <div class="card shadow mb-4">
            <div class="table-responsive">
<table class="table table-bordered" width="100%" cellspacing="0">
<thead class="thead-dark">

    <tr>
        <th>No</th>
        <th>Nama lategori</th>
        <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $no=1; foreach($kategori as $k): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $k->nama_kategori; ?></td>
        <td>
            <a href="<?= site_url('kategori/edit/',$k->id); ?>">edit</a>
            <a href="<?= site_url('kategori/hapus/',$k->id); ?>"
            onclick="return confirm('yakin?')">hapus</a>
        </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>