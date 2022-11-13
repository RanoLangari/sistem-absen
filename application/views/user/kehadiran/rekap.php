<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 style="text-transform: uppercase; font-weight: 800;">Rekap Kehadiran</h3>
                <h4>Bulan : <?= date('F') ?></h4>
            </div>
            <div class="card-body text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                        </tr>
                        <tr>
                            <td>Hadir</td>
                            <td><?= $Hadir ?></td>
                        </tr>
                        <tr>
                            <td>Sakit</td>
                            <td><?= $Sakit ?></td>
                        </tr>
                        <tr>
                            <td>Ijin</td>
                            <td><?= $Ijin ?></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>