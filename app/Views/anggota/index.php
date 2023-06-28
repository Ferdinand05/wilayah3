<?= $this->extend('templates/index'); ?>



<?= $this->section('content'); ?>
<section id="anggota">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="about">
                    Daftar Anggota
                </h2>
                <p>Daftar anggota wilayah 3 dan struktur jabatan</p>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col">
                <?php if (has_permission('administrator')) : ?>
                    <a href="<?= base_url('anggota/tambah') ?>" class="btn btn-primary">Tambah Anggota</a>
                <?php endif; ?>
                <?php if (session()->has('pesan')) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Good Job!</strong> <?= session('pesan') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md p-3">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lingkungan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        ?>
                        <?php foreach ($anggota as $a) : ?>
                            <tr class="text-center">
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $a['nama']; ?></td>
                                <td><?= $a['lingkungan']; ?></td>
                                <td><?= $a['status']; ?></td>
                                <td><?= $a['jabatan']; ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="/anggota/detail/<?= $a['id']; ?>" class="btn btn-info">
                                        Detail
                                    </a>
                                    <?php if (has_permission('administrator')) : ?>
                                        <a href="/anggota/edit/<?= $a['id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="/anggota/<?= $a['id']; ?>" onclick="return confirm('Anda yakin mau menghapus data ?')" class="btn btn-danger">Delete</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->links('default', 'pagination'); ?>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection(); ?>