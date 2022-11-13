<h3 style="text-transform: uppercase; font-weight: 800;" class="mb-4">Data <?= $title ?></h3>

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
            <th scope="col">NIP</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $user['no_employee'] ?></td>
            <td>
                <?php if (isset($user['photo'])) : ?>
                <img src="<?= base_url('image/' . $user['photo']) ?>" style="height:100px; widht:100px;">
                <?php else : ?>
                No Photo
                <?php endif; ?>
            </td>
            <td><?= $user['name'] ?></td>
            <td>
                <a href="<?= base_url('anggota/edit/' . $user['id_users']) ?>" class="btn btn-warning btn-sm text-light"
                    style="border-radius: 0;">Edit</a>
                <a href="<?= base_url('anggota/delete/' . $user['id_users']) ?>" class="btn btn-danger btn-sm"
                    style="border-radius: 0;" onclick="return confirm('Yakin ingin menghapus ini ?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>