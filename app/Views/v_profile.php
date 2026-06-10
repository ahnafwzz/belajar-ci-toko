<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section profile">
    <div class="row justify-content-center">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="<?= base_url() ?>NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle mb-3" style="max-width: 120px;">

                    <h2><?= $user['username'] ?></h2>
                    <h3 class="text-capitalize text-muted"><?= $user['role'] ?></h3>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label text-muted">Username</div>
                                <div class="col-lg-9 col-md-8 fw-bold"><?= $user['username'] ?></div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-3 col-md-4 label text-muted">Role Akses</div>
                                <div class="col-lg-9 col-md-8 text-capitalize"><?= $user['role'] ?></div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-3 col-md-4 label text-muted">Email</div>
                                <div class="col-lg-9 col-md-8"><?= $user['email'] ?></div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-3 col-md-4 label text-muted">Akun Dibuat</div>
                                <div class="col-lg-9 col-md-8">
                                    <?= date('d F Y', strtotime($user['created_at'])) ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-3 col-md-4 label text-muted">Status Akun</div>
                                <div class="col-lg-9 col-md-8 text-success fw-bold"><i class="bi bi-check-circle-fill"></i> Aktif</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>