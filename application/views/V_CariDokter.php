<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Dokter</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/Covid19.css'; ?>" />
    <style>
        .judul {
            color: #000;
            font-weight: bold;
        }

        .card-text {
            color: #000;
        }

        .card {
            border: 1px solid #999;
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
            <li><a href=""><img id="sideIcon" src="<?php echo base_url() . 'assets/Consult.png'; ?>"></a></li>
            <br><br>
            <li><a href=""><img id="sideIcon" src="<?php echo base_url() . 'assets/Call.png'; ?>"></a></li>
            <br><br>
            <li><a href=""><img id="sideIcon" src="<?php echo base_url() . 'assets/Virus.png'; ?>"></a></li>
        </ul>
    </div>

    <!-- Konten Main Bootstrap -->
    <div class="container mt-5 pt-5">
        <h2 class="judul text-center">Cari Dokter di Tempat Sekitar</h2>
        <div class="row">
            <div class="col justify-content-start text-center">
                <table class="table table-bordered bg-warning">
                    <thead>
                        <th>
                            <h4>Nama RS</h4>
                        </th>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($Hospital as $data) {
                            echo "
                        <tr>
                        <td><h6>" . $data['nama'] . "</h6></td>
                        </tr>
                    ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class=" col-12 text-center">
                <section class="container-rujukan mb-3 mt-3">
                    <!-- collapse -->
                    <button class="btn btn-primary bg-light text-dark font-weight-bold " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Rumah Sakit Santo Yusuf
                    </button>
                    <div class="collapse mt-3" id="collapseExample">
                        <div class="card card-body">
                            <!-- mulai slide -->
                            <!-- Succes -->
                            <div class="container my-4">


                                <!--Carousel Wrapper-->
                                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                                    <!--Controls-->
                                    <div class="controls-top">
                                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                    <!--/.Controls-->

                                    <!--Indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                        <li data-target="#multi-item-example" data-slide-to="1"></li>
                                        <li data-target="#multi-item-example" data-slide-to="2"></li>
                                    </ol>
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">

                                        <!--First slide-->
                                        <div class="carousel-item active">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter1</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter2</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter3</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/.First slide-->

                                        <!--Second slide-->
                                        <div class="carousel-item">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter4</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter5</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter6</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/.Second slide-->

                                        <!--Third slide-->
                                        <div class="carousel-item">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter7</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter8</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">
                                                    <div class="card mb-2">
                                                        <img class="card-img-top" src="assets/doctor.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Dokter9</h4>
                                                            <p class="card-text">Some quick example text to build on the Dokter and make up the bulk of the
                                                                card's content.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/.Third slide-->

                                    </div>
                                    <!--/.Slides-->

                                </div>
                                <!--/.Carousel Wrapper-->



                                <!-- akhir slide -->
                            </div>
                        </div>
                </section>



            </div>
        </div>

    </div>

    <!-- Akhir Main Content -->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <section style="background-color: #4183D7; padding-top: 3px;">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Deskripsi -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">MedStory</h6>
                        <p style="color: whitesmoke;">
                            MedStory merupakan sebuah aplikasi yang menyimpan data riwayat kesehatan setiap kali
                            seseorang berobat. Dilengkapi dengan fitur scan QR, live chat dengan dokter, forum kesehatan,
                            informasi kesehatan, nomor darurat, dan juga pencarian dokter.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-4 mx-auto mb-4">
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
                    <div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4">
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