<?= $this->extend('templates/index'); ?>






<?= $this->section('content'); ?>

<section id="detail">

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="about">
                    Detail Anggota
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3 mt-3 p-2" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/default.jpeg" class="img-fluid rounded-start" alt="..." width="200">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h5 class="card-title"><?= $anggota['nama']; ?></h5>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text"><?= $anggota['status']; ?> - <span
                                                class="badge text-bg-primary p-2"><?= $anggota['jabatan']; ?></span>
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text"><?= $anggota['lingkungan']; ?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text"><?= $anggota['alamat'] ?></p>
                                    </li>
                                </ul>



                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= base_url('anggota') ?>" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>





<?= $this->endSection(); ?>