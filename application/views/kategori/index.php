<h2>data Kategori</h2>

<a href="<?= site_url('kategori/tambah'); ?>">Tambah</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama lategori</th>
        <th>Aksi</th>
</tr>

<?php $no=1; foreach($kategori as $k): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $k->nama_kategori; ?><td>
        <td>
            <a href="<?= site_url('kategori/edit/',$k->id); ?>">edit</a>
            <a href="<?= site_url('kategori/hapus/',$k->id); ?>"
            onclick="return confirm('yakin?')">hapus</a>
        </td>
</tr>
<?php endforeach; ?>
</table>