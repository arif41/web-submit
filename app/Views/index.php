<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="text-center">
    <a href="https://primasolusi.id">
        <img src="/MPS-logo1.png" class="rounded" alt="Responsive image">
</div>
</a>
<br>
<div class="row justify-content-center align-self-center">
    <div class="col-12 col-xl-3">
        <div class="card">
            <h5 class="card-header bg-primary text-white">Welcome</h5>
            <div class="card-body">
                <a href="/schedule/plan" class="btn-primary btn btn-sm">Submit Schedule</a>
                <a href="/schedule/list" class="btn-success btn btn-sm">View Schedule</a>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>