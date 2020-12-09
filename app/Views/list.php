<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center align-self-center">
    <div class="col-6">
        <table class="table">
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Kepentingan</th>
                <th>Divisi</th>
                <th></th>
            </tr>
            <?php
            foreach ($schedule as $item) {
            ?>
                <tr>
                    <td><?= ucfirst($item['nama']) ?></td>
                    <td><?= date('d-m-Y', strtotime($item['tanggal'])) ?></td>
                    <td><?= ucfirst($item['lokasi']) ?></td>
                    <td><?= ucfirst($item['kepentingan']) ?></td>
                    <td><?= ucfirst($item['divisi']) ?></td>
                    <td><a href="/schedule/edit/<?= $item['id'] ?>" class="btn-warning btn btn-sm">Edit</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <a class="btn-primary btn" href="/schedule/index">Back to home</a>
    </div>
</div>
<?= $this->endSection() ?>