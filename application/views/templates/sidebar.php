<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar">

    <!-- Sidebar Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="#">

        <div class="sidebar-brand-icon rotate-15">
            <i class="fas fa-laugh-wink"></i>
        </div>

        <div class="sidebar-brand-text mx-3">
            Perpustakaan
        </div>

    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">

        <a class="nav-link"
           href="<?= site_url('dashboard') ?>">

            <i class="fas fa-fw fa-tachometer-alt"></i>

            <span>Dashboard</span>

        </a>

    </li>

    <!-- Kategori -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'kategori') ? 'active' : '' ?>">

        <a class="nav-link"
           href="<?= site_url('kategori'); ?>">

            <i class="fas fa-fw fa-folder"></i>

            <span>Kategori</span>

        </a>

    </li>

    <!-- Data Buku -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'buku') ? 'active' : '' ?>">

        <a class="nav-link"
           href="<?= base_url('buku'); ?>">

            <i class="fas fa-fw fa-book"></i>

            <span>Data Buku</span>

        </a>

    </li>

    <!-- Daftar Anggota -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'anggota') ? 'active' : '' ?> mx-2 my-1">

        <a class="nav-link rounded-lg px-3 transition-all"
           href="<?= site_url('anggota'); ?>">

            <i class="fas fa-fw fa-user mr-2"></i>

            <span class="font-weight-600">
                Daftar Anggota
            </span>

        </a>

    </li>

    <!-- Peminjaman -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'peminjaman') ? 'active' : '' ?>">

        <a class="nav-link"
           href="<?= base_url('peminjaman'); ?>">

            <i class="fas fa-fw fa-book"></i>

            <span>Peminjaman</span>

        </a>

    </li>

    <!-- Laporan Peminjaman -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'laporan') ? 'active' : '' ?>">

        <a class="nav-link"
           href="<?= base_url('laporan/peminjaman'); ?>">

            <i class="fas fa-fw fa-book"></i>

            <span>Laporan Peminjaman</span>

        </a>

    </li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">