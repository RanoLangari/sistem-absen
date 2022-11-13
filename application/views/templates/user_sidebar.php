<style>
body {
    font-family: Calibri;
    letter-spacing: 2px;
}
</style>

<ul class="navbar-nav sidebar accordion" style="background-color: #20897B;" id="accordionSidebar" <!-- Sidebar - Brand
    -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
        <!-- <div class="sidebar-brand-icon">
            <img src="logo-undana.png" style="width: 50px; height: 50px;">
        </div> -->
        <div style="letter-spacing: .5px; font-weight: 700; color: white; margin-top: 10px;">PRESENSI BIO SCIENCE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item mt-2">
        <a style="color: white;" class="nav-link" href="<?= base_url('user/profile') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>PROFIL</span></a>
    </li>

    <li class="nav-item mt-2">
        <a style="color: white;" class="nav-link" href="<?= base_url('absensi/entri') ?>">
            <i class="fas fa-fw fa-check"></i>
            <span>ABSEN</span></a>
    </li>

    <li class="nav-item mt-2">
        <a style="color: white;" class="nav-link" href="<?= base_url('absensi/tabel') ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>DATA ABSENSI</span></a>
    </li>

    <li class="nav-item mt-2">
        <a style="color: white;" class="nav-link" href="<?= base_url('absensi/rekap') ?>">
            <i class="fas fa-fw fa-file"></i>
            <span>REKAP ABSENSI</span></a>
    </li>

    <li class="nav-item">
        <a style="color: white;" class="nav-link" href="<?= base_url('auth/logout') ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>KELUAR</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>