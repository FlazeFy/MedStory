<!--Leonardho R. Sitanggang
    1302194041  SE-43-03
-->
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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/MainPage.css'; ?>" />
        
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
                <li style="float:right"><a id="Profil" href="account" style="font-size:14px"><img id="MyData" src="assets/MyData.png"> <?php foreach($tracker as $data){echo $data->username;} ?></a></li>
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
        <h2 style="margin-left: 16%;">Selamat datang, <?php foreach($tracker as $data){echo $data->username;} ?></h2>
        <div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; width: 70%; padding-top: 0.5%; border-radius: 10px;">
          <h1 style="text-align: left;">Informasi Kesehatan</h1>				
				<!--Slider-->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
				<ol class="carousel-indicators" style='z-index: 2'>
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
				<?php
				$i = 1;
				$status = ' active';
				foreach ($dataBerita as $data) {
				echo "
					<div class='carousel-item ".$status."' style='height:430px'  type='button'>
						<img class='d-block w-100' src='Main".$i.".jpeg' alt='Main".$i.".jpeg' style='height:410px; border-radius: 10px; opacity:95%'>
						<div class='carousel-caption d-none d-md-block' style='z-index:1'>
							<h3 style='font-family: Lucida Sans; font-size: 26px;'>".$data['title']."</h3>
							<p>...</p>
						</div>
					</div>";
					$status = ' ';
					$i++;
				}
				?>
				<!--Slider Control-->
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			</div>

        <!--Riwayat Kesehatan.-->
        <div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px;">
          <h1 style="text-align: left;">Riwayat Berobat</h1>
					<div class="container">
					<img type="button" src="assets/Info.png" id="helpBerobat" style="float: right; height: 35px; width: 35px; margin-top: -3%; margin-right: -1%;" 
							data-toggle="modal" data-target="#helpBerobatModal">
					<!--Search-->
					<form>
							<input type="text" class="form-control" id="searchKesehatan" style="float: right; width: 30%; margin-top: -3%; margin-right: 2%;">
							<img type="button" src="assets/search.png" style="float: right; margin-top: -3%; height: 30px; margin-right: 2%; width: 30px;">
					</form>
					</div>
					<br>
          <?php
            $newdeck = 1;
            $i = 1;
            foreach ($dataBerobat as $data){
            if ($newdeck % 3 != 0){
              echo "<div class='row'> 
                <div class='card-deck' style='margin: 10px;'>
                <div class='card'>
                <div class='card-header' style='background-color: #22A7F0'>
                  <img class='card-img-top' src='assets/doc".$i.".jpg' alt='Card image cap' style='width: 60px; height: 60px; margin-left: 50px;'>
                  <div style='float: left; margin-top: 20px;'><h4 style='color: whitesmoke;'>".$data['namaDokter']."</h4></div>
                  <div style='float: right; margin-top: 20px;'><h4 style='color: whitesmoke;'>".$data['spesialis']."</h4></div>
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
                  <small class='text-muted' style='float: right; text-decoration: underline; font-weight:bold;' type='button' data-toggle='popover' title='+62 ".$data['kontak']."' data-content='".$data['alamat']."'>".$data['lokasi']."</small>
                </div></div>";
              } else {
                echo "<div class='card'>
                <div class='card-header' style='background-color: #22A7F0'>
                  <img class='card-img-top' src='assets/doc".$i.".jpg' alt='Card image cap' style='width: 60px; height: 60px; margin-left: 50px;'>
                  <div style='float: left; margin-top: 20px;'><h4 style='color: whitesmoke;'>".$data['namaDokter']."</h4></div>
                  <div style='float: right; margin-top: 20px;'><h4 style='color: whitesmoke;'>".$data['spesialis']."</h4></div>
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
                  <small class='text-muted' style='float: right; text-decoration: underline; font-weight:bold;' type='button' data-toggle='popover' title='+62 ".$data['kontak']."' data-content='".$data['alamat']."'>".$data['lokasi']."</small>
                </div></div>";
                };		
                $i++;
                $newdeck++;
              };
            ?>
        </div>
        </main>

				<main>
				<!--Hasil Pemeriksaan-->
				<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px;">
          <h1 style="text-align: left;">Riwayat Pemeriksaan</h1>
					<div class="container">
					<img type="button" src="assets/Info.png" id="helpPemeriksaan" style="float: right; height: 35px; width: 35px; margin-top: -3%; margin-right: -1%;" 
							data-toggle="modal" data-target="#helpPemeriksaanModal">
					<!--Search-->
					<form>
							<input type="text" class="form-control" id="searchPemeriksaan" style="float: right; width: 30%; margin-top: -3%; margin-right: 2%;">
							<img type="button" src="assets/search.png" style="float: right; margin-top: -3%; height: 30px; margin-right: 2%; width: 30px;">
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

				<!-- Modal -->
				<!-- Riwayat Berobat Help -->
				<div class="modal fade" id="helpBerobatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tentang</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
									<h6 class='card-title'>Detail Penyakit</h6><p id="detail">...</p>
									<h6 class='card-title'>Diagnosa</h6><p id="diagnosa">...</p>
									<h6 class='card-title'>Solusi</h6><p id="solusi">...</p>
							</div>
							<div class="modal-footer">
								<p>Untuk informasi lebih lanjut, kunjungi </p>
								<button type="button" class="btn btn-primary" style="background-color: #4183D7; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">Bantuan</button>
							</div>
						</div>
					</div>
				</div>
        <!-- Riwayat Pemeriksaan Help -->
				<div class="modal fade" id="helpPemeriksaanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tentang</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
									<h6 class='card-title'>Jenis Pemeriksaan</h6><p id="jPemeriksaan">...</p>
									<h6 class='card-title'>Hasil Pemeriksaan</h6><p id="hPemeriksaan">...</p>
									<h6 class='card-title'>Normal</h6><p id="normal">...</p>
							</div>
							<div class="modal-footer">
								<p>Untuk informasi lebih lanjut, kunjungi </p>
								<button type="button" class="btn btn-primary" style="background-color: #4183D7; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">Bantuan</button>
							</div>
						</div>
					</div>
				</div>


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

				<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<!--Ajax for json-->
				<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

					<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
					<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
					-->
				
				<!--Jquery-->
				<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonRB.js'; ?>"></script>
				<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonRP.js'; ?>"></script>
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
					$(function () {
						$('[data-toggle="popover"]').popover()
					})
        })
        </script>
    </body>
</html>
