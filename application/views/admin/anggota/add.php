<h3 style="font-weight: 800;" class="mb-4">TAMBAH DATA STAFF</h3>

<form action="<?= base_url('anggota/add') ?>" method="post">
    <div class="form-group row">
        <label for="no_employee" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="text" class="form-control" name="no_employee" id="no_employee">
            <!-- <small>NIP harus 18 digit.</small> -->
            <?= form_error('no_employee', '<small class="text-danger mt-1">', '</small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="text" class="form-control" id="name" name="name">
            <?= form_error('name', '<small class="text-danger mt-1">', '</small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="email" class="form-control" id="email" name="email">
            <?= form_error('email', '<small class="text-danger mt-1">', '</small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-6">
            <input style="border-radius: 0;" type="password" class="form-control" id="password" name="password">
            <?= form_error('password', '<small class="text-danger mt-1">', '</small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-6">
            <select style="border-radius: 0;" name="gender" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="position" class="col-sm-2 col-form-label">Bagian</label>
        <div class="col-sm-6">
            <select style="border-radius: 0;" name="position_id" class="form-control">
                <?php foreach ($position as $p) : ?>
                <option value="<?= $p['id_positions'] ?>"><?= $p['position_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-8">
            <button type="submit" style="border-radius: 0; font-size: 18px;"
                class="btn btn-sm btn-success float-left"><i class="fas fa-save mr-1"></i>
                Simpan</button>
        </div>
    </div>
</form>