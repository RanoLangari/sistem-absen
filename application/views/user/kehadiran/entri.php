<?php if ($this->session->flashdata('message')) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('message') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif ?>

<style>
body {
    font-family: Calibri;
}
</style>

<form action="" method="POST">
    <?php if (is_weekend()) : ?>
    <h1 class="bg-light text-danger" colspan="4">HARI INI LIBUR. TIDAK PERLU ABSEN</h1>
    <?php else : ?>
    <div class="card" style="border-radius: 0;">
        <h5 class="card-header" style="border-radius: 0;">ISI KEHADIRAN</h5>
        <div class="card-body" style="border-radius: 0;">
            <div class="form-group row">
                <label for="time" class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <?php date_default_timezone_set('Asia/Kuala_Lumpur'); ?>
                    <input type="text" class="form-control-plaintext" name="time" value="<?= date('H:i') ?>"readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-6">
                    <?php date_default_timezone_set('Asia/Kuala_Lumpur'); ?>
                    <input type="text" class="form-control-plaintext" name="date" value="<?= date('d-M-Y') ?> "readonly>
                </div>
            </div>
            <?php if ($absen == 0) : ?>
                <?php if (limitTimeAbsenHarian()) : ?>
            <div class="form-group row">
                <label for="information" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-6">
                    <a href="<?= base_url('absensi/Hadir') ?>" class="btn btn-success mr-3"
                        style="border-radius: 0;">Masuk</a>
                    <a href="<?= base_url('absensi/Ijin') ?>" class="btn btn-warning text-light mr-3"
                        style="border-radius: 0;">Ijin</a>
                    <a href="<?= base_url('absensi/Sakit') ?>" class="btn btn-danger mr-3"
                        style="border-radius: 0;">Sakit</a>
                </div>
            </div>
            <?php else : ?>
            <td class="bg-light text-danger" colspan="4">Maaf, Waktu Absen Telah Selesai</td>
            <?php endif ?>
            <?php else : ?>
            <td class="bg-light text-danger" colspan="4">Anda Sudah Absen Hari Ini</td>
            <?php endif ?>
        </div>
    </div>
    <?php endif ?>
</form>

