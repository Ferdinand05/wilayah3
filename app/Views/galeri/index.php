<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"">
    <path fill=" #0099ff" fill-opacity="1"
    d="M0,160L34.3,154.7C68.6,149,137,139,206,149.3C274.3,160,343,192,411,176C480,160,549,96,617,80C685.7,64,754,96,823,122.7C891.4,149,960,171,1029,154.7C1097.1,139,1166,85,1234,90.7C1302.9,96,1371,160,1406,192L1440,224L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
    </path>

</svg>

<section id="galeri">
    <div class="container">
        <div class="row text-center pb-2">
            <div class="col">
                <h2 class="about">Galeri</h2>
                <p>Galeri foto dari kegiatan-kegiatan Wilayah 3</p>
            </div>
        </div>
        <div class="row border border-primary p-2">
            <div class="col-md">
                <figure class="figure">
                    <img src="/img/galeri/a.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Touring Goa Maria Kanada - Rangkasbitung</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/b.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Staycation OMK 3 - Puncak</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/c.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Staycation OMK 3 - Puncak</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/d.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Staycation OMK 3 - Puncak</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/i.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Family Gathering OMK & KMK Wil.3 - Ragunan</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/j.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Family Gathering OMK & KMK Wil.3 - Ragunan</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/m.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">OMK 3 - Cari Dana</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/n.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">OMK 3 Camping - Cibubur</figcaption>
                </figure>

            </div>
            <div class="col-md">
                <figure class="figure">
                    <img src="/img/galeri/e.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Touring Goa Maria Kanada - Rangkasbitung</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/f.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Camping Rohani OMK - Wisma Sahabat Yesus</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/g.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Camping Rohani OMK - Wisma Sahabat Yesus</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/h.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Bhakti Sosial OMK 3</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/k.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Matius Championship Voli</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/img/galeri/l.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">Pelayanan Jumat Agung</figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>
<footer id="footer" class="bg-dark text-white">
    <div class="container text-center p-2">
        <div class="row mb-3">
            <div class="col">
                <img src="/img/logo_matius.png" alt="matius" class="img-fluid me-3 rounded-circle" width="50">
                <img src="/img/logo_omk.jpg" alt="omk" class="img-fluid rounded-circle" width="50">
            </div>
        </div>
        <div class="row">
            <div class="col">
                &copy;2023 Wilayah 3. Made with <i class="bi bi-heart-fill"></i>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>