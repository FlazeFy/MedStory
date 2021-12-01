<!--Leonardho R. Sitanggang
    1302194041  SE-43-03
-->
<?php
		session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <title>HistoryPage_1302194041</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!--Source file.-->
        <link type="text/css" rel="stylesheet" href="MainPage.css">
        
    </head>
    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="assets/logoWhite.png">
                <li><a href="">Dataku</a></li>
                <li  id="active"><a href="">Riwayat</a></li>
                <li><a href="">Forum</a></li>
                <li style="float:right"><a type="button" id="signOut" onclick="signOut()">Ganti Akun</a></li>
                <li style="float:right"><a id="Profil" href="account" style="font-size:14px"><img id="MyData" src="assets/MyData.png"> [username]</a></li>
                <div id="ddParent">
                    <button id="dropbutton"><img id="set" src="assets/Setting.png"></button>
                        <!--DropDown menu navigation-->
                        <div id="dropdown-content">
                            <a href="#">Pusat Bantuan</a>
                            <a href="#">Tentang</a>
                            <a href="#">Kebijakan & Privasi</a>
                </div>
            </ul>
        </div>

        <!--Side Navigation menu.-->
	    <div id="Navigation2">
		    <ul>
			    <li><a href=""><img id="sideIcon" src="assets/Print.png"></a></li>
                <br><br>
			    <li><a href=""><img id="sideIcon" src="assets/Consult.png"></a></li>
                <br><br>
			    <li><a href=""><img id="sideIcon" src="assets/Call.png"></a></li>
                <br><br>
			    <li><a href=""><img id="sideIcon" src="assets/Virus.png"></a></li>
		    </ul>
	    </div>
        <main>

        <!--News feeds.-->
        <br><br><br>
        <h2>Selamat datang, <?php $username ?></h2>
        <div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; width: 88%; padding-top: 0.5%; border-radius: 10px;">
          <h1 style="text-align: left;">Informasi Kesehatan</h1>
        <div class="d-flex flex-row" style="overflow-x: scroll;">
          <?php 
						$i = 1;
						foreach ($dataBerita as $data) {
							echo "<div class='col-md-4'>
                <div class='card' type='button'>
                    <img src='Main".$i.".jpeg' class='card-img-top' alt='Main".$i.".jpeg' style='height: 180px; display: flex;'>
                    <div class='card-body'>
                        <p class='card-text'>".$data['title']."</p>
                    </div>
                </div>
            	</div>";
							$i++;
						}
					?>
          </div>
        </div>

        <!--Riwayat Kesehatan.-->
        <div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 88%; border-radius: 10px;">
          <h1 style="text-align: left;">Riwayat Berobat</h1>
					<div class="container">
					<img type="button" src="assets/Info.png" id="helpBerobat" style="float: right; height: 35px; width: 35px; margin-top: -3%; margin-right: -4%;">
					<!--Search-->
					<form>
							<input type="text" class="form-control" id="searchKesehatan" style="float: right; width: 30%; margin-top: -3%; margin-right: 1%;">
							<img type="button" src="assets/search.png" style="float: right; margin-top: -3%; height: 30px; margin-right: 1%; width: 30px;">
					</form>
					</div>
					<br>
        <div class="row">
        
            <div class="card-deck" style="margin: 10px;">
						<?php 
										$i = 1;
										foreach ($dataBerobat as $data) {
											echo "<div class='card'>
										<div class='card-header bg-white'>
												<img class='card-img-top' src='assets/doc".$i.".jpg' alt='Card image cap' style='width: 60px; height: 60px; margin-left: 50px;'>
												<div style='float: left; margin-top: 20px;'><h4 style='color: #4183D7;'>".$data['namaDokter']."</h4></div>
												<div style='float: right; margin-top: 20px;'><h4 style='color: #CCD453;'>".$data['spesialis']."</h4></div>
										</div>
											<div class='card-body'>
												<h5 class='card-title' style='font-weight: bold; font-size: 18px;'>".$data['penyakit']."</h5>
												<br>
												<h6 class='card-title'>Detail Penyakit</h6>
												<p class='card-text'>".$data['sejak']."</p>
												<p class='card-text'>Keluhan : </p>
												<p class='card-text'>".$data['keluhan']."</p>
												<h6 class='card-title'>Diagnosa</h6>
												<p class='card-text'>".$data['diagnosa']."</p>
												<h6 class='card-title'>Solusi</h6>
												<p class='card-text'>".$data['solusi']."</p>
											</div>
											<div class='card-footer'>
												<small class='text-muted' style='float: left;'>".$data['tanggal']."</small>
												<small class='text-muted' style='float: right;'>".$data['lokasi']."</small>
										</div></div>";
										$i++;
								};		
						?>
						</div>
        </div>
        </div>
        </main>

				<main>
				<!--Hasil Pemeriksaan-->
				<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 88%; border-radius: 10px;">
          <h1 style="text-align: left;">Riwayat Pemeriksaan</h1>
					<div class="container">
					<img type="button" src="assets/Info.png" id="helpPemeriksaan" style="float: right; height: 35px; width: 35px; margin-top: -3%; margin-right: -4%;">
					<!--Search-->
					<form>
							<input type="text" class="form-control" id="searchPemeriksaan" style="float: right; width: 30%; margin-top: -3%; margin-right: 1%;">
							<img type="button" src="assets/search.png" style="float: right; margin-top: -3%; height: 30px; margin-right: 1%; width: 30px;">
					</form>
					</div>
					<br>
        	<div class="row">
						<!--Item 3-->
						<div class="card-deck" style="margin: 10px;">
						<div class="card">
                    <div class="card-header bg-white">
                        <img class="card-img-top" src="assets/rs1.jpeg" alt="Card image cap" style="width: 60px; height: 60px; margin-left: 50px;">
                        <div style="float: left; margin-top: 20px;"><h4 style="color: #4183D7;">RS Dian Harapan</h4></div>
                        <div style="float: right; margin-top: 20px;"><h4 style="color: #A053D4;">Laboratorium</h4></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; font-size: 18px;">Pemeriksaan Darah</h5>
                        <br>
                        <h6 class="card-title">Detail Pemeriksaan</h6>
                        <div class="container">
                            <div class="col-sm">
                            <!--Tabel.-->
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Jenis Pemeriksaan</th>
                                      <th scope="col">Hasil Pemeriksaan</th>
                                      <th scope="col">Normal</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <th>Eritrosit</th>
                                        <td>4,6</td>
                                        <td>4,5-5,5</td>
                                    <tr>
                                        <th>Leukosit</th>
                                        <td>11,0</td>
                                        <td>5,0-10,0</td>  
                                    <tr>
                                        <th>Hemoglobin(HB)</th>
                                        <td>13,5</td>
                                        <td>13,0-16,0</td>
                                    <tr>
                                        <th>Malaria(Rapid)</th>
                                        <td>Negatif</td>
                                        <td>-</td>                                   
                                  </tbody>
                            </table> 
                            </div>
                            <h6 class="card-title">Dokter Penanggung Jawab</h6>
                            <p>Dr. Josef Mengele</p>
                        </div>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Selasa, 23 Maret 2021</small>
                      </div>
                    </div>
								</div>
				</div>
				</div>
				</main>

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
        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194041-Leonardho R Sitanggang</div>
        </footer>

        <!--Collapse JS-->
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
        </script>
          
        <!--Collapse JQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script>
        $(document).ready(function(){
          $('.collapsible').click(function(e) {
              e.stopPropagation();
              $('#iconDrop').css({
                  "-ms-transform" : "rotate(180deg)",      //Internet Explorer  
                  "-webkit-transform": "rotate(180deg)",   //Chrome & Safari
                  "-moz-transform": "rotate(180deg)",      //Firefox
                  "-o-transform" : "rotate(180deg)",       //Opera
                  "transform": "rotate(180deg)"            //Others
              });
          });
        })
        </script>

				<!--Javascript signout-->
				<script type="text/javascript">
						function signOut(){
								//Verifikasi SignOut
								var pop = window.confirm("Apakah Anda yakin?");

									//Kondisi.
									if(pop){
											window.location.href = "http://localhost/MedStory";
											alert("Berhasil keluar");
									} else {
											alert("Sign-Out dibatalkan");
									}
							}
							function editEnabled(){
									document.getElementById("Inputan").disabled = false;
							}
        	</script>
    </body>
</html>
