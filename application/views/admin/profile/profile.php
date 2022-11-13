<style>
body {
    font-family: Calibri;
    letter-spacing: 2px;
}
</style>

<h3 style="letter-spacing: 1.5px; font-weight: 700; font-family: Calibri;" class="mb-4">PROFIL SAYA</h3>

<!-- <?php if ($this->session->flashdata('message')) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('message') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif ?> -->

<?= form_open_multipart(base_url('admin/profile')) ?>
<form action="<?= base_url('admin/profile') ?>" method="post">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="text" class="form-control" id="name" name="name"
                value="<?= $admin['name'] ?>" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="email" class="form-control" id="email" name="email"
                value="<?= $admin['email'] ?>" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="position" class="col-sm-2 col-form-label">Bagian</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="text" class="form-control" name="position_id" id="position_id"
                value="Administrator" readonly>
        </div>
    </div>
</form>
<?= form_close() ?>