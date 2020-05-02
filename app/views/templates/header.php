<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- lokal style -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/style.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <!-- FontAwesome 5.13.0 -->
    <script src="<?= BASEURL; ?>/fontawesome-free-5.13.0/js/all.min.js"></script>

    <title><?= $data['judul']; ?></title>

</head>

<body>

    <div class="wrapper">
        <!-- Navigation Bars -->
        <div class="top_navbar">
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="top_menu">
                <div class="logo">
                    <span class="logo_img">
                        <img src="icons/home.png" width="60" height="40" alt="">
                    </span>
                    <span class="logo_title">
                        <b>Rumah Bekam Gorontalo</b>
                    </span>
                </div>
                <ul>
                    <!-- <li><a href="#"><i class="fas fa-search"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fas fa-bell"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fas fa-user"></i></a></li> -->
                </ul>
            </div>
        </div>

        <!-- Side Bars Navigation -->
        <div class="sidebar_menu">
            <ul>
                <li>
                    <a href="index.html">
                        <span class="icon">
                            <i class="fa fa-home"></i></span>
                        <span class="list">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-btn">
                        <span class="icon">
                            <i class="fa fa-user-tie" aria-hidden="true"></i>
                        </span>
                        <span class="list">
                            Pegawai
                        </span>
                        <span class="drop">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-container">
                        <ul>
                            <li>
                                <a href="<?= BASEURL; ?>/pegawai">
                                    <span class="icon">
                                        <i class="fas fa-user-tie"></i>
                                    </span>
                                    <span class="list">
                                        Daftar Pegawai
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="absen.html">
                                    <span class="icon">
                                        <i class="fas fa-clipboard"></i>
                                    </span>
                                    <span class="list">
                                        Absen
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="gaji.html">
                                    <span class="icon">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                    </span>
                                    <span class="list">
                                        Gaji
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="dropdown-btn">
                        <span class="icon">
                            <i class="fa fa-user-injured" aria-hidden="true"></i>
                        </span>
                        <span class="list">
                            Pasien
                        </span>
                        <span class="drop">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-container">
                        <ul>
                            <li>
                                <a href="<?= BASEURL; ?>/pasien">
                                    <span class="icon">
                                        <i class="fa fa-user-injured" aria-hidden="true"></i>
                                    </span>
                                    <span class="list">
                                        Daftar Pasien
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="rekam-medik.html">
                                    <span class="icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </span>
                                    <span class="list">
                                        Rekam Medik
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="dropdown-btn">
                        <span class="icon">
                            <i class="fas fa-donate" aria-hidden="true"></i>
                        </span>
                        <span class="list">
                            Transaksi
                        </span>
                        <span class="drop">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-container">
                        <ul>
                            <li>
                                <a href="<?= BASEURL; ?>/barang">
                                    <span class="icon">
                                        <i class="fas fa-cubes"></i>
                                    </span>
                                    <span class="list">
                                        Daftar Barang
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="pengadaan.html">
                                    <span class="icon">
                                        <i class="fas fa-parachute-box"></i>
                                    </span>
                                    <span class="list">
                                        Pengadaan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="penjualan.html">
                                    <span class="icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </span>
                                    <span class="list">
                                        Penjualan
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </span>
                        <span class="list ml-1">
                            About
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="container ml-0 mr-2 ">
            <div class="main_content">
                <div class="title-main">
                    <span class="icon">
                        <i class="<?= $data['icon']; ?>"></i>
                    </span>
                    <span class="list">
                        <?= $data['judul']; ?>
                    </span>
                    <hr>

                    <!-- <div class="card mb-2" style="width: calc(100% - 0px);">
                    <div class="card-body">
                        <span class="icon">
                            <i class="<?= $data['icon']; ?>"></i>
                        </span>
                        <span class="list">
                            <?= $data['judul']; ?>
                        </span>
                    </div>
                </div> -->


                    <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav> -->