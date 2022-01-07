<!--Leonardho R. Sitanggang
    1302194041  SE-43-03
-->
<!DOCTYPE html>
<html>
    <head>
        <title>LandingPage_1302194041</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!--Source file-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/LoginPage.css'; ?>"/>
		<style>
			body {background-image: url("assets/background1.png");}
		</style>
    </head>
    <body>
		<form method="post" action="<?php echo base_url().'landing/savedata'; ?>">
          <!--Login section-->
            <div class="third container-fluid" style="width: 50%; left: 45%; top: 25%;">
                <div class="row" style="height: auto;">
                    <div class="col border-right">
                        <!--Mascot-->
                        <div class="p-3 py-5">
                            
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="p-3 py-5">
                            <h4 class="text-left">Selamat datang di MedStory</h4>
                            <div class="row mt-2">
                                <!--Data diri.-->
                                <div class="col-md-12" style="margin: 2px;"><h6>Username</h6><input type="text" class="form-control" id="username" name="username"></div>                            
                                <div class="col-md-12" style="margin: 2px;"><h6>Password</h6><input type="password" class="form-control" id="pass" name="password"></div>    
                            </div>
							<!--Error Message-->
							<?php if(isset($error_message)) { echo"
								<h6 style='color:red; font-size:14px;'>".$error_message."<h6>";
							} ?>
                            <div class="mt-5 text-left"><button class="ButtonC" type="button" onclick="window.location.href='<?= site_url('forgot') ?>'">Lupa Password</button></div>
                            <div class="mt-5 text-center"><button class="ButtonB" type="submit" onclick="" name="save">Submit</button></div>
                            <div class="mt-5 text-center"><button class="ButtonA" type="button" onclick="window.location.href='<?= site_url('createAcc') ?>'">Buat Akun</button></div>
                        </div>
                </div>
            </div>
		</form>
        <!--Collapse JS-->
        <script>
            
        </script>
        
        <script type="text/javascript">
            function resetForm(){
                document.form1.reset();
            }
        </script>
    </body>
</html>
