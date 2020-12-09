<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center align-self-center">
    <div class="col-12 col-xl-3">
        <div class="card">
            <h5 class="card-header bg-primary text-white">Form</h5>
            <div class="card-body">
                <form action="/schedule/save" method="POST">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" required><br>
                    <label for="tanggal">Tanggal</label><br>
                    <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal" class="form-control"><br>
                    <label for="lokasi">Lokasi</label><br>
                    <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi" class="form-control" required><br>
                    <label for="lokasi">Kepentingan</label><br>
                    <input type="text" id="kepentingan" name="kepentingan" placeholder="Kepentingan" class="form-control" required><br>
                    <label for="divisi">Divisi</label><br>
                    <input type="radio" id="teknis" name="divisi" value="teknis" class="custom-control-input"> Teknis<br>
                    <input type="radio" id="sales" name="divisi" value="sales" class="custom-control-input"> Sales<br>
                    <br>
                    <input type="submit" value="Submit" class="btn-primary btn btn-sm">
                    <input type="reset" value="Reset" class="btn-danger btn btn-sm">
                    <a href="/schedule/list" class="btn-success btn btn-sm">View Schedule</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>