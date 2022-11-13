<style>
body {
    font-family: Calibri;
    letter-spacing: 2px;
}
</style>

<h3 class="mb-4" style="font-weight: 600;">EMAIL ADMINISTRATOR</h3>

<form action="<?= base_url('admin/change_email') ?>" method="post">

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="email" class="form-control" name="email"
                value="<?= $email['email'] ?>">
            <?= form_error('email', '<small class="text-danger mt-1">', '</small>'); ?>
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