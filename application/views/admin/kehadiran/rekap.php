<h2 class="mb-4"><?= $title ?></h2>

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
            <th scope="col">Bagian</th>
            <th scope="col">Hadir</th>
            <th scope="col">Sakit</th>
            <th scope="col">Ijin</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($rekap as $r) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['position'] ?></td>
            <td><?= $r['Hadir'] ?></td>
            <td><?= $r['Sakit'] ?></td>
            <td><?= $r['Ijin'] ?></td>
            <td><?= $r['total'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<a style="border-radius: 0; font-size: 18px;" class="btn btn-success btn-sm mt-4"
    href="<?= base_url('kehadiran/cetak') ?>">Cetak
    Rekap</a>