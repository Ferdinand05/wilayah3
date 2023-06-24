<?= $this->extend('templates/index') ?>


<?php $this->section('content') ?>


<section id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Family</h5>
                    <p>“Having somewhere to go is home. Having someone to love is family. And having both is a
                        blessing.”</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Friends</h5>
                    <p>“Truly great friends are hard to find, difficult to leave, and impossible to forget.”</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Faith</h5>
                    <p>"Blessed are those who hunger and thirst for righteousness, for they will be filled"</p>
                    <p>Matthew 5:6</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section id="about"">
    <div class=" container">
    <div class="row">
        <div class="col text-center">
            <h2 class="about mb-4">About</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-around p-2 my-auto">
        <div class="col-md-6">
            <p class="mt-3">Kami adalah salah satu bagian dari banyaknya Wilayah di Paroki Santo Matius Penginjil
                Bintaro. Kami
                memiliki 5 Lingkungan, antara lain Santo Leo, Santo Leonardus, Yos Sudarso, Tarsisius dan Romo
                Sanjoyo</p>
            <p class="mt-4">Kami aktif di berbagai kegiatan Gereja Seperti, Koor Wilayah, Koor Lingkungan dan
                keikutsertaan
                lainnya.
                Selain itu OMK Wilayah 3 pun turut aktif dalam kegiatan pelayanan di Gereja seperti Kepanitiaan
                Matius Championship, Matius Sports Day, 17 Agustus dan masih banyak lagi.
            </p>
        </div>
        <div class="col-md-5">
            <img src="/img/aboutme.svg" alt="aboutme" class="img-fluid">
        </div>
    </div>
    </div>
</section>


<section id="location" class="p-3">
    <div class="row">
        <div class="col text-center">
            <h3 class="about mb-4 pt-3">Get to know me</h3>
        </div>
    </div>
    <div class="row justify-content-center text-center p-4">
        <div class="col-md d-flex justify-content-around my-auto pb-2">
            <a class="navbar-brand" href="/">
                <img src="/img/ig.png" alt="Logo" width="90" height="90" class="d-inline-block img-fluid">
                <p>@wilayah3</p>
            </a>
            <a class="navbar-brand" href="/">
                <img src="/img/fb.png" alt="Logo" width="90" height="90" class="d-inline-block ">
                <p>@wilayah3</p>
            </a>
            <a class="navbar-brand" href="/">
                <img src="/img/twit.png" alt="Logo" width="90" height="90" class="d-inline-block ">
                <p>@wilayah3</p>
            </a>
        </div>
        <div class="col-md">
            <iframe class="border-1 border-black" width="100%" height="450px" scrolling="no" marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=santo%20matius%20penginjil+(santo%20matius)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                    href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe>
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
</footer>
<?= $this->endSection(); ?>