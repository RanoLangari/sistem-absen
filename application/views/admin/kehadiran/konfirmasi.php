<h3 style="text-transform: uppercase; font-weight: 800;" class="mb-4"><?= $title ?></h3>

<?php if ($this->session->flashdata('message')) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('message') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif ?>

<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Pukul</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($absensi as $a) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $a['name'] ?></td>
            <td><?= $a['information'] ?></td>
            <td><?= $a['date'] ?></td>
            <td><?= $a['time'] ?></td>
            <td>
                <a href="<?= base_url('kehadiran/konfirmasi/' . $a['id_presents']) ?>" class="btn btn-success btn-sm"
                    style="border-radius: 0;">Konfirmasi</a>
                <a href="<?= base_url('kehadiran/tolak/' . $a['id_presents']) ?>" class="btn btn-danger btn-sm"
                    style="border-radius: 0;">Tolak</a>
            </td>
        </tr>
        <?php endforeach ?>

    </tbody>
</table>