<style>
body {
    font-family: Calibri;
    letter-spacing: 2px;
}
</style>

<h3 class="mb-4" style="font-weight: 600;">PASSWORD ADMINISTRATOR</h3>

<form action="<?= base_url('admin/change_password') ?>" method="post">

    <div class="form-group row">
        <label for="new_password" class="col-sm-2 col-form-label">Password Baru</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="password" class="form-control" name="new_password">
            <?= form_error('new_password', '<small class="text-danger mt-1">', '</small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="password_confirm" class="col-sm-2 col-form-label">Konfirmasi Password</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="password" class="form-control" name="password_confirm">
            <?= form_error('password_confirm', '<small class="text-danger mt-1">', '</small>'); ?>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-8">
            <button type="submit" class="btn btn-sm btn-success float-left"
                style="border-radius: 0; font-size: 18px;"><i class="fas fa-save mr-1"></i>
                Simpan</button>
        </div>
    </div>
</form>