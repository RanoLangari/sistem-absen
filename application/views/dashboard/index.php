<h2>Selamat Datang, <?= $this->session->userdata('name') ?></h2>
<p>Ini adalah halaman dashboard.</p>

<?php if ($this->session->userdata('id_users') == '1') : ?>
<div class="row">
    <div class="col-lg-4 col-6" style="margin-top: 30px;">
        <div class="small-box bg-info shadow-lg" style="height: 160px; width: 270px;">
            <div class="inner" style="margin-left: 15px; color: white;">
                <h1 style="font-family: Helvetica; font-weight: 600;"><?= $total_Staff_Tata_Usaha ?></h1>
                <p style="font-weight: 600;">TOTAL STAFF TATA USAHA</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <hr>
            <a href="<?= base_url('anggota/Staff_Tata_Usaha') ?>" class="small-box-footer"
                style="margin-left: 15px; text-decoration: none; color: white;">Selengkapnya
                &nbsp;<i class="fas fa-angle-right "></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6" style="margin-top: 30px;">
        <div class="small-box bg-warning shadow-lg" style="height: 160px; width: 270px;">
            <div class="inner" style="margin-left: 15px; color: white;">
                <h1 style="font-family: Helvetica; font-weight: 600;"><?= $total_Staff_Kepegawaian ?></h1>
                <p style="font-weight: 600;">TOTAL STAFF KEPEGAWAIAN</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <hr>
            <a href="<?= base_url('anggota/Staff_Kepegawaian') ?>" class="small-box-footer"
                style="margin-left: 15px; text-decoration: none; color: white;">Selengkapnya &nbsp;<i
                    class="fas fa-angle-right "></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6" style="margin-top: 30px;">
        <div class="small-box bg-danger shadow-lg" style="height: 160px; width: 270px;">
            <div class="inner" style="margin-left: 15px; color: white;">
                <h1 style="font-family: Helvetica; font-weight: 600;"><?= $total_Staff_Perlengkapan ?></h1>
                <p style="font-weight: 600;">TOTAL STAFF PERLENGKAPAN</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <hr>
            <a href="<?= base_url('anggota/Staff_Perlengkapan') ?>" class="small-box-footer"
                style="margin-left: 15px; text-decoration: none; color: white;">Selengkapnya &nbsp;<i
                    class="fas fa-angle-right "></i></a>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ($this->session->userdata('id_users') != '1') : ?>

<?php endif; ?>