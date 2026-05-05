<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-15">
            <i class ="fas fa-laugh-wink"></i>
</div>
        <div class="sidebar-brand-text mx-3">Perpustakaan</div>
</a>

<hr class="sidebar-divider my-0">
<li class="nav-item active">
    <a class="nav-link" href="<?= site_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('kategori'); ?>">
        <i class="fas fa-fw fa-folder"></i>
        <span>kategori</span>
</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('buku'); ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Data Buku</span>
    </a>
</li>   
<li class="nav-item <?= ($this->uri->segment(1) == 'anggota') ? 'active' : '' ?> mx-2 my-1">
        <a class="nav-link rounded-lg px-3 transition-all" href="<?= site_url('anggota'); ?>">
            <i class="fas fa-fw fa-user mr-2"></i>
            <span class="font-weight-600">Daftar Anggota</span>
        </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('peminjaman'); ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Peminjaman</span>
    </a>
</li>   

</ul>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">