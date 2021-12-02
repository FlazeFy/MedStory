<!--Leonardho R. Sitanggang
    1302194041  SE-43-03
-->
<!DOCTYPE html>
<html>
    <head>
        <title>CreateAccPage_1302194041</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!--Source file-->
        <link type="text/css" rel="stylesheet" href="LoginPage.css">
    </head>
    <body>
    <main>
        <form>
            <div class="third container-fluid" style="width: 80%; left: 8%; top: 4%;">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="p-3 py-5">
                            <!--Button back.-->
                            <div class="mt-5 text-center"><button class="ButtonD" type="button" onclick="window.location.href='landing'">Kembali</button></div>
                            <!--Upload foto.-->
                            <h4 class="text-left">Foto Profil</h4>
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img src="assets/defaultImg.png" alt="Admin" class="rounded-circle img-fluid" width="200px">
                            </div>
                            <img src="assets/Info.png" style="width:20px; float: left;">
                            <p class="text-left" style="font-size: 14px; color: #4183D7;">Maksimal 4 mb</p>
                            <input type="file" id="myFile" name="filename" style="font-size: 12px;">
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <h4 class="text-left">Data Diri</h4>
                            <div class="row mt-2">
                                <!--Data diri.-->
                                <div class="col-md-12"><h6 >Nama Lengkap</h6><input type="username" class="form-control" id="fullname" value=""></div>                            
                                <div class="col-md-12"><h6>Nomor Induk Kependudukan</h6><input type="text" class="form-control" id="nik" value=""></div>
                                <div class="col-md-12"><h6>Tempat Lahir</h6><input type="text" class="form-control" id="tLahir" value=""></div>
                                <div class="col-md-12"><h6>Tanggal Lahir</h6><input type="date" class="form-control" id="tglLahir" value=""></div>
                                <div class="col-md-12"><h6>Alamat</h6><input type="text" class="form-control" id="add" value=""></div>
                                <div class="col-md-12"><h6>Pekerjaan</h6><input type="text" class="form-control" id="job" value=""></div>
                                <div class="col-md-6"><h6>Tinggi Badan (Cm)</h6><input type="number" class="form-control" id="tBadan" value=""></div>
                                <div class="col-md-6"><h6>Berat Badan (Kg)</h6><input type="number" class="form-control" id="bBadan" value=""></div>
                                <div class="col-md-12" id="jenisKelamin"><h6>Jenis Kelamin</h6>
                                    <fieldset>
                                    <input type="radio" name="cat_input" class="radioB" id="radioB" value="Pria">Pria</input>
                                    <input type="radio" name="cat_input" class="radioB" id="radioB" value="Wanita">Wanita</input>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <!--Data akun.-->
                            <h4 class="text-left">Data Akun</h4>
                            <div class="col-md-12"><h6>Nama Pengguna</h6><input type="text" class="form-control" id="username" value=""></div>
                            <div class="col-md-12"><h6>Email</h6><input type="email" class="form-control" id="email" value=""></div>
                            <div class="col-md-12"><h6>Nomor Ponsel</h6><input type="text" class="form-control" id="ponsel" value=""></div>
                            <div class="col-md-12"><h6>Password</h6><input type="password" class="form-control" id="pass" value=""></div>
                            <div class="col-md-12"><h6>Konfirmasi Password</h6><input type="password" class="form-control" id="passCon" value=""></div><br>
                            <div class="col-md-12">
                                <img src="assets/Info.png" style="width:20px; float: left;">
                                <p style="color: #4183D7; font-size: 13px;">Password harus memiliki min 8 karakter, 1 huruf
                                kapital, dan 1 angka.</p><br>
                            <!--Button submit.-->
                            <div class="mt-5 text-center"><button class="ButtonB" type="button" onclick="cekAkun()">Selanjutnya</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>
	<!--Javascript validasi buat akun-->
	<script type="text/javascript">
            function cekAkun(){
				//Deklarasi variabel.
				var nama = document.getElementById("username").value;
				var email = document.getElementById("email").value;
				var ponsel = document.getElementById("ponsel").value;
				var pass = document.getElementById("pass").value;
				var passCon = document.getElementById("passCon").value;

				var fullname = document.getElementById("fullname").value;
				var nik = document.getElementById("nik").value;
				var tLahir = document.getElementById("tLahir").value;
				var tglLahir = document.getElementById("tglLahir").value;
				var add = document.getElementById("add").value;
				var job = document.getElementById("job").value;
				var tBadan = document.getElementById("tBadan").value;
				var bBadan = document.getElementById("bBadan").value;

				//Validasi data.
				if(!nama || !email  || !ponsel  || !pass  || !passCon  || !fullname  || !nik  || !tLahir  || 
					!tglLahir  || !add  || !job  || !tBadan  || !bBadan ){
					alert("Data Anda masih kosong");
				} else if(tBadan <= 0 || bBadan <= 0) {
					alert("Tinggi atau berat badan Anda tidak valid");
				} else if(pass !== passCon || !pass || !passCon ){
					alert("Konfirmasi password Anda salah");
				} else if(nik.length !== 16){
					alert("NIK Anda tidak valid");
				} else if(ponsel.length < 10 || ponsel.length > 13){
					alert("Nomor telepon Anda tidak valid");
				} else if ( document.getElementById("myFile").files.length == 0 ){
					console.log("Anda belum memilih foto profil");
				} else if (nama !== null && email !== null && ponsel !== null && pass !== null &&
					passCon !== null && fullname !== null && nik !== null && tLahir !== null && 
					tglLahir !== null && add !== null && job !== null && tBadan !== null && bBadan !== null
					&& tBadan > 0 && bBadan > 0 && pass === passCon && nik.length == 16 && ponsel.length >= 10
					&& ponsel.length <= 13 && document.getElementById("myFile").files.length != 0){
					alert("Akun sukses dibuat. Selamat datang");
					window.location.href = "history";
				}
			}
        </script>
    </body>
</html>
