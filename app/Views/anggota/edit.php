<?= $this->extend('templates/index'); ?>



<?= $this->section('content'); ?>
<section id="form">
    <div class="container">
        <div class="row">
            <div class="col-md text-center">
                <h2 class="about">
                    Form Edit Anggota
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mt-5 mx-auto">
                <form action="/anggota/update/<?= $anggota['id']; ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="nama">Nama</label>
                        <input placeholder="Nama..." type="text" class="form-control <?= (session('validation')?->hasError('nama') ? 'is-invalid' : 'is-valid') ?>" id="nama" name="nama" value="<?= $anggota['nama'] ?>" required>
                        <div class="invalid-feedback">
                            <?= session('validation')?->getError('nama'); ?>
                        </div>

                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="alamat">Alamat</label>
                        <input placeholder="Alamat..." type="text" class="form-control <?= (session('validation')?->hasError('alamat') ? 'is-invalid' : 'is-valid') ?>" id="alamat" name="alamat" value="<?= $anggota['alamat']; ?>">
                        <div class="invalid-feedback">
                            <?= session('validation')?->getError('alamat'); ?>
                        </div>

                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="lingkungan">Lingkungan </label>
                        <select class="form-select" id="lingkungan" name="lingkungan" required>
                            <option selected disabled>Pilih Lingkungan</option>
                            <option value="St.Leo">St.Leo</option>
                            <option value="St.Leonardus">St.Leonardus</option>
                            <option value="Tarsisius">Tarsisius</option>
                            <option value="Romo Sanjoyo">Romo Sanjoyo</option>
                            <option value="Yos Sudarso">Yos Sudarso</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="status">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option selected disabled>Pilih Status</option>
                            <option value="OMK">OMK</option>
                            <option value="KMK">KMK</option>
                            <option value="Warga Senior">Warga Senior</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jabatan">Jabatan</label>
                        <select class="form-select" id="jabatan" name="jabatan" required>
                            <option selected disabled>Pilih Jabatan</option>
                            <option value="Ketua Wilayah">Ketua Wilayah</option>
                            <option value="Wakil Ketua Wilayah">Wakil Ketua Wilayah</option>
                            <option value="Ketua Lingkungan">Ketua Lingkungan</option>
                            <option value="Wakil Ketua Lingkungan">Wakil Ketua Lingkungan</option>
                            <option value="Ketua OMK">Ketua OMK</option>
                            <option value="Wakil Ketua OMK">Wakil Ketua OMK</option>
                        </select>

                    </div>
                    <p class="text-info">Jika tidak ada Jabatan akan otomatis menjadi <code>Anggota</code></p>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>