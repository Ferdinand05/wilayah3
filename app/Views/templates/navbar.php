<nav class="navbar navbar-expand-lg shadow-sm  fixed-top p-3">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo_matius.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Wilayah 3
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="<?= base_url('#about') ?>" onclick="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/anggota">Anggota</a>
                </li>

                <?php if (logged_in()) : ?>
                <li class="nav-item">
                    <a class="nav-link active bg-secondary rounded text-center" href="/logout">Logout</a>
                </li>
                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link active bg-secondary rounded text-center" href="/login">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>