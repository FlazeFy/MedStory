<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/Covid19.css'; ?>" />
    <style>
        .container-vaksinasi {
            width: 85%;
        }

        .container-rujukan {
            width: 85%;
        }

        .list-content {
            width: 85%;
        }
    </style>
</head>

<body>
    <!--Main Navigation menu.-->
    <div id="Navigation">
        <ul>
            <img id="logo" src="assets/logoWhite.png">
            <li><a href="">Dataku</a></li>
            <li><a href="">Riwayat</a></li>
            <li><a href="">Forum</a></li>
            <li style="float:right" class="cf"><a id="signOut">Ganti Akun</a></li>
            <li style="float:right" class="cf"><a id="Profil" href=""><img id="MyData" src="<?php echo base_url() . 'assets/MyData.png'; ?>"></a></li>
            <li style="float:right" class="cf">
                <div id="ddParent">
                    <button id="dropbtn"><img id="set" src="<?php echo base_url() . 'assets/Setting.png'; ?>"></button>
                    <!--DropDown menu navigation-->
                    <div id="dropdown-content">
                        <a href="#">Pusat Bantuan</a>
                        <a href="#">Tentang</a>
                        <a href="#">Kebijakan & Privasi</a>

                    </div>
                </div>
            </li>

        </ul>
    </div>

    <!--Side Navigation menu.-->
    <div id="Navigation2">
        <ul>
            <li><a href=""><img id="sideIcon" src="assets/Print.png"></a></li>
            <br><br>
            <li><a href="../CARI DOKTER/index-fauzan.html"><img id="sideIcon" src="<?php echo base_url() . 'assets/Consult.png'; ?>"></a></li>
            <br><br>
            <li><a href=""><img id="sideIcon" src="<?php echo base_url() . 'assets/Call.png'; ?>"></a></li>
            <br><br>
            <li><a href=""><img id="sideIcon" src="<?php echo base_url() . 'assets/Virus.png'; ?>"></a></li>
        </ul>
    </div>
    <!-- konten Utama -->
    <div id="main" class="container mt-5 pt-5">

        <div class="container-rujukan">
            <h1>Rumah Sakit Rujukan & Tempat Karantina</h1>
            <p>Lokasi : Kota Jayapura, Papua</p>
            <div class="list-content">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($Hospital as $data) {
                            echo "
                                <tr>
                                    <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
                                        <td>" . $data['nama'] . "</td>
                                        <td>" . $data['alamat'] . "</td>
                                        <td>" . $data['nohp'] . "</td>
                                    </form>
                                </tr>";
                        }

                        ?>
                    </tbody>
                </table>
                <!-- <ul>
                    <?php
                    foreach ($Hospital as $data) {
                        echo
                        "<li>
                        <p>" . $data['nama'] . "</p>
                        <p>" . $data['alamat'] . "</p>
                        <p>" . $data['nohp'] . "</p>
                        </li>";
                    }
                    ?>
                </ul> -->
            </div>
        </div>
        <div class="container-vaksinasi">
            <h1>Tempat Vaksinasi</h1>
            <p>Lokasi : Kota Jayapura, Papua</p>
            <div class="list-content">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($Vaksinasi as $data) {
                            echo "
                                <tr>
                                    <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
                                        <td>" . $data['name'] . "</td>
                                        <td>" . $data['alamat'] . "</td>
                                        <td>" . $data['nohp'] . "</td>
                                    </form>
                                </tr>";
                        }

                        ?>
                    </tbody>
                </table>
                <!-- <ul>
                    <?php
                    foreach ($Vaksinasi as $data) {
                        echo
                        "<li>
                        <p>" . $data['name'] . "</p>
                        <p>" . $data['alamat'] . "</p>
                        <p>" . $data['nohp'] . "</p>
                        </li>";
                    }
                    ?>
                </ul> -->
            </div>
        </div>

    </div>

    <div class="satgas">
        <h3>Satgas Covid</h3>
        <div class="properti">
            <div class="kontak">
                <p>Hotline Kemenkes RI</p>
                <div class="list">
                    <img src="<?php echo base_url() . 'assets/Phone.png'; ?>" alt="">
                    <p>+6281206653542</p>
                </div>
                <div class="list">
                    <img src="<?php echo base_url() . 'assets/Phone.png'; ?>" alt="">
                    <p>+6281277643221</p>
                </div>
            </div>

            <div class="kontak">
                <p>Satgas Covid-10 Provinsi Papua</p>
                <div class="list">
                    <img src="<?php echo base_url() . 'assets/Phone.png'; ?>" alt="">
                    <p>+6281289779099</p>
                </div>
                <div class="list">
                    <img src="<?php echo base_url() . 'assets/Phone.png'; ?>" alt="">
                    <p>https://covid19.papua.go.id/</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-light text-muted">
        <section style="background-color: #4183D7; padding-top: 3px;">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
                        <!-- Deskripsi -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">MedStory</h6>
                        <p style="color: whitesmoke;">
                            MedStory merupakan sebuah aplikasi yang menyimpan data riwayat kesehatan setiap kali
                            seseorang berobat. Dilengkapi dengan fitur scan QR, live chat dengan dokter, forum kesehatan,
                            informasi kesehatan, nomor darurat, dan juga pencarian dokter.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-4 mx-auto mb-4 text-center">
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">Kelompok 4</h6>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">Leonardho R. Sitanggang</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">Fauzan Reza Ananda</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">Muhammad Rafi Alfarisi</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">Muhammad Akmal Fadhlillah</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">Ananda Ardian Pratama P.</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4 text-center">
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">NIM</h6>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">1302194041</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">1302194003</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">1302194024</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">1302190103</a>
                        </p>
                        <p style="color: whitesmoke;">
                            <a class="text-reset">1302194049</a>
                        </p>
                    </div>
        </section>
        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194003-Fauzan Reza Arnanda</div>
    </footer>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>