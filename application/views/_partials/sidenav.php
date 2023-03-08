    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Lelang Mobil
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-5">
            <form method="post" action="<?= site_url('page/cari') ?>">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Barang" aria-label="Cari di Lelang Elektronik" id="cari" name="cari" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        <input type="submit" class="btn btn-success" id="search" value="Cari">
                    </div>
                </div>
            </form>
        </div>
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>">Home</a>
                        </li>
                        <?php if ($activeUser) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('page/penawaran') ?>">Riwayat Penawaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('page/lelang') ?>">Pemenang Lelang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('page/change') ?>">Ganti Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('page/edit') ?>">Hi, <?= $activeUser->nama; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('page/logout') ?>">logout</a>
                        </li>
                        <?php endif ?>
                        <?php if (!$activeUser) : ?>
                            <li class="nav-item">
                                <a class="nav-link"href="<?= site_url('page/register') ?>">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('page/login') ?>">Login</a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
                
                

        </div>
    </nav>
    <!-- Close Header -->
