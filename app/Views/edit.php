<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center align-self-center">
    <div class="col-12 col-xl-3">
        <div class="card">
            <h5 class="card-header bg-primary text-white">Edit</h5>
            <div class="card-body">
                <form action="/schedule/edit" method="POST">
                    <input type="hidden" name="id" value="<?= ucfirst($schedule['id']) ?>">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Nama" value="<?= ucfirst($schedule['nama']) ?>" class="form-control"><br>
                    <label for="tanggal">Tanggal</label><br>
                    <input type="date" id="tanggal" name="tanggal" value="<?= ucfirst($schedule['tanggal']) ?>" class=" form-control"><br>
                    <label for="lokasi">Lokasi</label><br>
                    <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi" value="<?= ucfirst($schedule['lokasi']) ?>" class=" form-control"><br>
                    <label for="lokasi">Kepentingan</label><br>
                    <input type="text" id="kepentingan" name="kepentingan" placeholder="Kepentingan" value="<?= ucfirst($schedule['kepentingan']) ?>" class=" form-control"><br>
                    <p><?= ucfirst($schedule['divisi']) ?></p>
                    <input type="submit" value="Submit" class="btn-primary btn btn-sm">
                    <input type="reset" value="Reset" class="btn-danger btn btn-sm">
                    <a href="/schedule/list" class="btn-success btn btn-sm">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>