<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/mycss.css">
</head>

<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4183D7;">
        <a class="navbar-brand">
            <img class="logo" src="<?= base_url(); ?>assets/images/logoWhite.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Dataku </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Riwayat </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Forum') ?>"> Forum </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('InputBerita') ?>"> Berita </a>
                </li>
            </ul>

            <form class="form-inline my-2 ">
                <li class="nav-item dropdown">
                    <a class="nav-link" src="<?= base_url(); ?>assets/icon/Setting.png" data-toggle="dropdown">
                        <img class="dropNav" src="<?= base_url(); ?>assets/icon/Setting.png"></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Pusat Bantuan</a>
                        <a class="dropdown-item" href="##">Tentang</a>
                        <a class="dropdown-item" href="###">Kebijakan & Privasi</a>
                    </div>
                </li>
                <a class="signOut" onclick="signOut();">Ganti Akun</a></li>
                <!--<a class="btn_ganti_akun" onclick="signOut();">Ganti Akun</a></li>-->
            </form>
        </div>
    </nav>
</body>