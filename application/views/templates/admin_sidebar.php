<style>
body {
    font-family: Calibri;
    letter-spacing: 2px;
}
</style>

<ul class="navbar-nav sidebar accordion" style="background-color: #20897B;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <!-- <div class="sidebar-brand-icon">
            <img src="logo-undana.png" style="width: 50px; height: 50px;">
        </div> -->
        <div style="letter-spacing: .5px; font-weight: 700; color: white;">PRESENSI BIO SCIENCE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i style="color: white;" class="fas fa-fw fa-laptop"></i>
            <span style="color: white;">DASHBOARD</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('anggota/add') ?>">
            <i style="color: white;" class="fas fa-fw fa-user-plus"></i>
            <span style="color: white;">TAMBAH STAFF</span></a>
    </li>

    <li class="nav-item">
        <a style="color: white;" class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>DATA STAFF</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner">
                <a class="collapse-item" href="<?= base_url('anggota/Staff_Tata_Usaha') ?>">Staff Tata Usaha</a>
                <a class="collapse-item" href="<?= base_url('anggota/Staff_Kepegawaian') ?>">Staff Kepegawaian</a>
                <a class="collapse-item" href="<?= base_url('anggota/Staff_Perlengkapan') ?>">Staff Perlengkapan</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a style="color: white;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kehadiran"
            aria-expanded="true" aria-controls="kehadiran">
            <i class="fas fa-fw fa-list"></i>
            <span>KEHADIRAN</span>
        </a>
        <div id="kehadiran" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner">
                <a class="collapse-item" href="<?= base_url('kehadiran/konfirmasi_kehadiran') ?>">Konfirmasi Absensi</a>
                <a class="collapse-item" href="<?= base_url('kehadiran/tabel_kehadiran') ?>">Data Absensi</a>
                <a class="collapse-item" href="<?= base_url('kehadiran/rekap_kehadiran') ?>">Rekap Absensi</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
            <i style="color: white;" class="fas fa-fw fa-sign-out-alt"></i>
            <span style="color: white;" style="color: white;">KELUAR</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>