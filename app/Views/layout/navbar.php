<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7D0F0F;">
    <div class="container">
        <a class="navbar-brand" href="/admin">Beranda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="/datapenduduk">Data Penduduk</a>
                <a class="nav-link active" href="/penerimabantuan">Penerima Bantuan</a>
                <a class="nav-link active" href="/pengumuman">Pengumuman</a>

                <?php if (logged_in()) :  ?>
                    <a class="nav-link active" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-link active" href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>