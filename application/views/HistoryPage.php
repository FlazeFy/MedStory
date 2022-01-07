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
        
		<style>
			#myBtn {
				display: none;
				position: fixed;
				bottom: 20px;
				right: 30px;
				z-index: 99;
				font-size: 18px;
				border: none;
				background-color: #22A7F0;
				padding: 15px;
				border-radius: 6px;
			}
		</style>
    </head>
    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="assets/logoWhite.png">
                <li><a href="myData">Dataku</a></li>
                <li  id="active"><a href="">Riwayat</a></li>
                <li><a href="diskusi">Forum</a></li>
                <li style="float:right"><a type="button" id="signOut" onclick="signOut()">Ganti Akun</a></li>
                <li style="float:right"><a id="Profil" href="account" style="font-size:14px"><img id="MyData" src="assets/MyData.png"> <?= $data = $this->session->userdata('userTrack'); ?></a></li>
                <div id="ddParent">
                    <button id="dropbutton"><img id="set" src="assets/Setting.png"></button>
                        <!--DropDown menu navigation-->
                        <div id="dropdown-content">
                            <a href="pusatBantuan">Pusat Bantuan</a>
                            <a href="tentang">Tentang</a>
                            <a href="kebijakan">Kebijakan & Privasi</a>
                </div>
            </ul>
        </div>

        <!--Side Navigation menu.-->
	    <div id="Navigation2">
		    <ul>
			    <li><a href="myData"><img id="sideIcon" src="assets/Print.png"></a></li>
                <br><br>
			    <li><a href="cariDokter"><img id="sideIcon" src="assets/Consult.png"></a></li>
                <br><br>
			    <li><a href="nomorDarurat"><img id="sideIcon" src="assets/Call.png"></a></li>
                <br><br>
			    <li><a href="covid"><img id="sideIcon" src="assets/Virus.png"></a></li>
		    </ul>
	    </div>
        <main>

		<!--Back to top.-->
		<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
			<img src='assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
		</button>

        <!--News feeds.-->
        <br><br><br>
        <h2 style="margin-left: 16%;">Selamat datang, <?= $data = $this->session->userdata('userTrack'); ?></h2>
        <div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; width: 70%; padding-top: 0.5%; border-radius: 10px;">
          <h1 style="text-align: left;">Informasi Kesehatan</h1>				
				<!--Slider-->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
				<ol class="carousel-indicators" style='z-index: 2'>
				<?php 
					$status =' active';
					$i = 0;
					foreach ($dataBerita as $data) {
						echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$i."' class='".$status."'></li>";
						$status = ' ';
						$i++;
					}
				?>
				</ol>
				<div class="carousel-inner">
				<?php
				$status = ' active';
				foreach ($dataBerita as $data) {
				echo "
					<div class='carousel-item ".$status."' style='height:430px'  type='button'>
						<img class='d-block w-100' src='assets/newsImage/Main".$data['idBerita'].".jpeg' alt='Main".$data['idBerita'].".jpeg' style='height:410px; border-radius: 10px; opacity:95%'>
						<div class='carousel-caption d-none d-md-block' style='z-index:1'>
							<h3 style='font-family: Lucida Sans; font-size: 26px; background: rgba(130, 130, 130, 0.5); border-radius:5px;'>".$data['title']."</h3>
							<p>".$data['tanggal']."</p>
						</div>
					</div>";
					$status = ' ';
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
					data-toggle="modal" data-target="#helpBerobatModal"><br></div>
          <?php
            $i = 1;
			$status = ' show';
            foreach ($dataBerobat as $data){
              echo "<div id='accordionB'> 
                <div class='card'>
                	<div class='card-header' type='button' style='border-radius:6px; border-width:1px; border-bottom: 4.5px solid #28A0EB' data-toggle='collapse' 
					data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapse".$i."'>
						<img src='assets/doc".$i.".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:50px; height:50px; float:left;'>
						<div style='float: left; margin-top: 20px; padding-left:15px;'><h4>".$data['namaDokter']."</h4></div>
						<div style='float: right; margin-top: 20px;'><h4>".$data['penyakit']." / ".$data['spesialis']."</h4></div>
                	</div>

				<div id='collapse".$i."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordionB'>
                <div class='card-body'>
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
                <br></div>
				</div>
			</div><br>";
				$i++;
				$status = ' ';
			}?>
			</div>
        </div>
        </main>

				<main>
				<!--Hasil Pemeriksaan-->
				<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px;">
          <h1 style="text-align: left;">Riwayat Pemeriksaan</h1>
					<div class="container">
					<img type="button" src="assets/Info.png" id="helpPemeriksaan" style="float: right; height: 35px; width: 35px; margin-top: -3%; margin-right: -1%;" 
							data-toggle="modal" data-target="#helpPemeriksaanModal">
					</div>
					<br>
					<!--Pemeriksaan Darah-->
          <h2 style="text-align: left; font-size:20px;">Pemeriksaan Darah</h2>
			<?php
            $i = 1;
			$status = ' show';
            foreach ($dataPeriksaD as $data){
				echo "<div id='accordionD'> 
						<div class='card'>
                    <div class='card-header bg-white' type='button' style='border-radius:6px; border-width:1px; border-bottom: 4.5px solid #28A0EB' data-toggle='collapse' 
					data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapse".$i."'>
                        <img src='assets/rs".$i.".jpeg' alt='Card image cap' class='rounded-circle img-fluid' style='width:50px; height:50px; float:left;'>
                        <div style='float: left; margin-top: 20px;'><h4 style='color: #4183D7; padding-left:15px;'>".$data['lokasi']."</h4></div>
                        <div style='float: right; margin-top: 20px;'><h4 style='color: #A053D4;'>Laboratorium</h4></div>
                    </div>

					<div id='collapse".$i."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordionD'>
                    <div class='card-body'>
                        <h6 class='card-title'>Detail Pemeriksaan</h6>
                        <div class='container' id='dataTable'>                       
                            <!--Tabel.-->
                            <table class='table'>
                                <thead class='thead-dark'>
                                    <tr>
                                      <th scope='col'>Jenis Pemeriksaan</th>
                                      <th scope='col'>Hasil Pemeriksaan / Normal</th>
                                    </tr>
                                  </thead>
                                <tbody>
									<tr>
										<th>Leukosit</th>
										<td>".$data['j_Leukosit']."</td>
									<tr>
										<th>Eritrosit</th>
										<td>".$data['j_Eritrosit']."</td>
									<tr>
										<th>Trombosit</th>
										<td>".$data['j_Trombosit']."</td>
									<tr>
										<th>Hemoglobin(HB)</th>
										<td>".$data['j_Hemoglobin']."</td>
									<tr>
										<th>Hematrokit(Hr)</th>
										<td>".$data['j_Hematrokit']."</td>
									<tr>
										<th>Glukosa</th>
										<td>".$data['j_Glukosa']."</td>
                            </table>    
                            <h6 class='card-title'>Dokter Penanggung Jawab</h6>
                            <p>".$data['namaDokter']."</p>
                        </div>
                      </div>
                      <div class='card-footer'>
                        <small class='text-muted'>".$data['tanggal']." / ".$data['jam']."</small>
						<button class='btn btn-primary' onclick='createPDF()' style='float:right;'>Cetak</button>
                      <br><br></div>
                      </div>
					</div><br>";
					$i++;
					$status = ' ';
					}?>
				</div><hr>

				<!--Pemeriksaan Penyakit-->
				<h2 style="text-align: left; font-size:20px;">Pemeriksaan Penyakit</h2>
				<?php
            $i = 1;
			$status = ' show';
            foreach ($dataPeriksaP as $data){
				echo "<div id='accordionP'> 
						<div class='card'>
                    <div class='card-header bg-white' type='button' style='border-radius:6px; border-width:1px; border-bottom: 4.5px solid #28A0EB' data-toggle='collapse' 
					data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapse".$i."'>
                        <img src='assets/rs".$i.".jpeg' alt='Card image cap' class='rounded-circle img-fluid' style='width:50px; height:50px; float:left;'>
                        <div style='float: left; margin-top: 20px;'><h4 style='color: #4183D7; padding-left:15px;'>".$data['lokasi']."</h4></div>
                        <div style='float: right; margin-top: 20px;'><h4 style='color: #A053D4;'>Laboratorium</h4></div>
                    </div>

					<div id='collapse".$i."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordionP'>
                    <div class='card-body'>
                        <h6 class='card-title'>Detail Pemeriksaan</h6>
                        <div class='container' id='dataTable'>                       
                            <!--Tabel.-->
                            <table class='table'>
                                <thead class='thead-dark'>
                                <tr>
            	                    <th scope='col'>Jenis Pemeriksaan</th>
            	                    <th scope='col'>Hasil Pemeriksaan</th>
                                </tr>
                                  </thead>
                                <tbody>
								<tr>
								<th>".$data['jenis']."</th>
								<td>".$data['hasil']."</td>
                            </table>    
                            <h6 class='card-title'>Dokter Penanggung Jawab</h6>
                            <p>".$data['namaDokter']."</p>
                        </div>
                    </div>
                      <div class='card-footer'>
                        <small class='text-muted'>".$data['tanggal']." / ".$data['jam']."</small>
						<button class='btn btn-primary' onclick='createPDF()' style='float:right;'>Cetak</button>
                      <br><br></div>
                    </div>
					</div><br>";
					$i++;
					$status = ' ';
				}?>
				</div>
				
				</div>
				</main>
				
				<!-- Konsultasi lanjutan -->
				<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; width: 70%; padding-top: 0.5%; border-radius: 10px;">
          <h1 style="text-align: left;">Konsultasi Lanjutan & Berobat</h1><br>
					<button type='button' class='btn btn-primary' style='background-color: #4183D7; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 2px 6px 0px rgba(0,0,0,0.2); float:left;'
					data-toggle="modal" data-target="#tambahBerobatModal">Daftar Berobat</button> 
					<br><br>
					<!--Tabel.-->
					<table class="table">
            <thead class="thead-dark">
            <tr>
    	    <th scope="col">Jenis Konsultasi</th>
			<th scope="col">Kode Booking</th>
            <th scope="col">Dokter</th>
			<th scope="col">Lokasi</th>
			<th scope="col">Jam</th>
            <th scope="col">Tanggal</th>
			<th scope="col">Edit</th>
            <th scope="col">Hapus</th>
            </tr>
            </thead>
            <tbody>
			<?php
				foreach ($dataKonsultasi as $data) {
					echo" <tr>
            		    <th>".$data['spesialis']."</th>
						<th>".$data['kodeBooking']."</th>
            	  	    <td>".$data['namaDokter']."</td>
              	        <td>".$data['lokasi']."</td>
						<th>".$data['jam']."</th>
        	            <th>".$data['tanggal']."</th>
							<td><button type='button' style='background-color: #4183D7; border: 1px; border-radius: 7px; color:whitesmoke; font-size:13px;' 
							data-toggle='modal' data-target='#editBerobatModal".$data['kodeBooking']."'>Edit</button></td>
							<td><button type='button' style='background-color: #F6404F; border: 1px; border-radius: 7px; color:whitesmoke; font-size:13px;'
							data-toggle='modal' data-target='#hapusBerobatModal".$data['kodeBooking']."'>Batalkan</button></td>";}   
						?>                            
            </tbody>
          </table> 
				</div>

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
				<!-- Daftar Berobat -->
				<div class="modal fade" id="tambahBerobatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Daftar Berobat</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form method="POST" action="history/daftar">
							<div class="modal-body" style="text-align: left">
									<h6 class='card-title'>Dokter</h6>
									<select class="form-control" name="dokterTambah">
									<?php foreach ($dataPraktik as $data ) {
										echo "<option value='".$data['namaDokter'].":".$data['spesialis'].":".$data['lokasi']."'>".$data['namaDokter']." - ".$data['spesialis']." - ".$data['lokasi']."</option>";
									} ?>
									</select><br>
									<h6 class='card-title'>Tanggal</h6>
									<input class="form-control" type="date" name="tanggalTambah" required></input><br>
									<h6 class='card-title'>Jam</h6>
									<input class="form-control" type="time" name="jamTambah" required></input><br>
							</div>
							<div class="modal-footer">
								<p>Untuk informasi lebih lanjut, kunjungi </p>
								<button type="button" class="btn btn-primary" style="background-color: #4183D7; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">Bantuan</button>
								<button type="submit" class="btn btn-primary" style="background-color: #119e37; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">Daftar</button>
							</div></form>
						</div>
					</div>
				</div>

				<!--Batal berobat verifikasi-->
				<form method="post" action='<?php echo base_url().'history/hapus';?>'>
				<?php foreach ($dataKonsultasi as $data){
				echo "<div class='modal fade' id='hapusBerobatModal".$data['kodeBooking']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog' role='document'>
					<div class='modal-content'>
						<div class='modal-header'>
							<h5 class='modal-title' id='exampleModalLabel'>Verifikasi</h5>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
							</button>
						</div>
						<div class='modal-body'>
							<p>Apakah anda yakin ingin menghapus booking berobat dengan kode</P>
							<h2>".$data['kodeBooking']."</h2>
							<input hidden class='form-control' name='kodeBooking' value='".$data['kodeBooking']."'></input>
							<h6 class='card-title' style='float:left;'>Konfirmasi Password</h6>
							<input class='form-control' type='password' name='password'><br>
						</div>
						<div class='modal-footer'>
							<button type='submit' class='btn btn-primary' required>Ya, Saya yakin</button>
						</div>
					</div>
				</div>
			</div>"; } ?></form>

				<!-- Edit Berobat -->
				<form method="post" action='<?php echo base_url().'history/ubah';?>'>
				<?php foreach ($dataKonsultasi as $data){
					echo "<div class='modal fade' id='editBerobatModal".$data['kodeBooking']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header'>
								<h5 class='modal-title' id='exampleModalLabel'>Edit Berobat</h5>
								<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
								</button>
							</div>
							<div class='modal-body' style='text-align: left'>
									<h6 class='card-title'>Dokter</h6>
									<input class='form-control' type='' name='namaDokter' disabled placeholder='".$data['namaDokter']."'></input><br>
									<h6 class='card-title'>Lokasi</h6>
									<input class='form-control' type='' name='lokasiTambah' disabled placeholder='".$data['lokasi']."'></input><br>
									<h6 class='card-title'>Tanggal</h6>
									<input class='form-control' type='date' name='tanggalTambah'></input><br>
									<h6 class='card-title'>Jam</h6>
									<input class='form-control' type='time' name='jamTambah'></input><br>
									<p style='float:left; font-weight:bold;'>Kode Booking Berobat</p>
									<h2 style='float:right;'>".$data['kodeBooking']."</h2>
									<input hidden class='form-control' name='kodeBooking' value='".$data['kodeBooking']."'></input>
							</div>
							<div class='modal-footer'>
								<button type='submit' class='btn btn-primary' style='background-color: #119e37; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);'>Simpan</button>
							</div>
						</div>
					</div>
				</div>";
				}?></form>

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194041-Leonardho R Sitanggang</div>
        </footer>

        <!--Javascript Collapse-->
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
				
		<!--Javascript PDF-->
		<script>
			function createPDF() {
				var sTable = document.getElementById('dataTable').innerHTML;

				var style = "<style>";
				style = style + "table {width: 100%;font: 16px Calibri;}";
				style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
				style = style + "padding: 2px 3px;text-align: center;}";
				style = style + "</style>";

				// CREATE A WINDOW OBJECT.
				var win = window.open('', '', 'height=700,width=700');

				win.document.write('<html><head>');
				win.document.write('<title>Pemeriksaan Darah Lengkap</title>');   // <title> FOR PDF HEADER.
				win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
				win.document.write('</head>');
				win.document.write('<body>');
				win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
				win.document.write('</body></html>');
				win.document.close(); 	// CLOSE THE CURRENT WINDOW.
				win.print();    // PRINT THE CONTENTS.
			}
		</script>

		<!--Javascript signout-->
		<script type="text/javascript">
			function signOut(){
				//Verifikasi SignOut
				var pop = window.confirm("Apakah Anda yakin?");
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

			//Back to the top js.
			var mybutton = document.getElementById("myBtn");
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
				}
			}

			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
        </script>

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!--Ajax for json-->
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>				
		<!--Jquery-->
		<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonRB.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonRP.js'; ?>"></script>
        <script>
        $(document).ready(function(){
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
        })
        </script>
    </body>
</html>
