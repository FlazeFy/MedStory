<!DOCTYPE html>
<html>

<head>
    <title>Forum_1302194024</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/mycss.css">

    <!--CDN Bootstrap CSS-->
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <!--Add Diskusi-->
    <div class="chat-popup" id="opendiskusi">
        <form class="form-container" method="post" action="<?php echo base_url() . 'Forum/inputDiskusi'; ?>">
            <b>Silahkan masukan apa yang akan anda diskusikan!</b>
            <textarea type="text" class="form-control" textarea placeholder="Type message.." id="diskusi" name="diskusi"></textarea>
            <input type="hidden" name="tanggaldiskusi" value="<?php echo date("YYYY-MM-DD"); ?>">
            <button type="submit" class="btn" id="inputDiskusi" value="Submit">Send</button>
            <button type="button" class="btn cancel" onclick="closeFormDiskusi()">Close</button>
        </form>
    </div>
    <script>
        function openFormDiskusi() {
            document.getElementById("opendiskusi").style.display = "block";
        }

        function closeFormDiskusi() {
            document.getElementById("opendiskusi").style.display = "none";
        }
    </script>

    <!--Chat-->
    <div class="container-chat" id="Chat">
        <div class="message">
            <form action="/ForumPage.html">
                <div class="message_header">
                    <h4>Chat support</h4>
                    <p>Selamat datang di chat support MedStory</p>
                </div>

                <div class="chatbox">
                    <div>
                        <div class="message_item message_item_admin">
                            Hallo, apakah ada yang bisa saya bantu?
                        </div>
                        <div class="message_item message_item_user">
                            Kak, apakah anak berumur 12 tahun boleh divaksin?
                        </div>
                        <div class="message_item message_item_admin">
                            Tentu saja boleh kak, karna vaksin dimulai minimal dari usia 12 tahun kak
                        </div>
                        <div class="message_item message_item_typing">
                            <span class="message_dot"></span>
                            <span class="message_dot"></span>
                            <span class="message_dot"></span>
                        </div>
                    </div>
                </div>
                <div class="chatbox_footer">
                    <input type="text" placeholder="Write a message...">
                    <button type="submit" class="btn">Send</button>
                    <button type="button" class="btn cancel" onclick="closeFormChat()">Close</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function openFormChat() {
            document.getElementById("Chat").style.display = "block";
        }

        function closeFormChat() {
            document.getElementById("Chat").style.display = "none";
        }
    </script>

    <!--Side Navigation menu-->
    <div class="SideNav">
        <ul>
            <li><a onclick="openFormDiskusi()"><img class="sideIcon" src="<?= base_url(); ?>assets/icon/Email.png"></a></li>
            <br><br>
            <li><a onclick="openFormChat()"><img class="sideIcon" src="<?= base_url(); ?>assets/icon/Message.png"></a></li>
        </ul>
    </div>

    <!--News feeds.-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $status = 'active';
            $i = 0;
            foreach ($dataBerita as $db) {
                echo "<li data-slide-to='" . $i . "' class='" . $status . "'></li>";
                $status = ' ';
                $i++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $status = 'active';
            foreach ($dataBerita as $db) {
                echo "
					<div class='carousel-item " . $status . "'style='height:500px; padding:0% 10% 0% 10%; background: rgba(130, 130, 130, 0.5); type='button'>
                        <img class='d-block w-100' src='assets/uploads/" . $db['fotoberita'] . "' style='height:500px;'>
						<div class='carousel-caption d-none d-md-block' style='z-index:1;'>
							<h3 style='font-family: Lucida Sans; font-size: 26px; background: rgba(130, 130, 130, 0.5); border-radius:5px;'>" . $db['namaberita'] . "</h3>
							<p>" . $db['tanggal'] . "</p>
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



    <!--Forum Diskusi-->
    <?php foreach ($dataDiskusi as $data) {
        echo "
            <div class='container-diskusi' style='margin: 1%;>
                <div class='ForumDiskusi'>
                    <div class='diskusi'>
                        <class='diskusi'>" . $data['diskusi'] . "
                        <br>
                        <class='diskusi'>" . $data['tanggaldiskusi'] . "
                    </div>
                </div>
            <div>";
    }
    ?>
    <!--<div class="diskusi-popup" id="openpopupdiskusi">
                <div class="diskusi2">
                    <h5>Tentu saja boleh</h5>
                </div>
                <div class="diskusi2">
                    <h5>Boleh kakak</h5>
                </div>
                <div class="diskusi2">
                    <h5>Jelas boleh karena minimal usia yang boleh di vaksin ialah 12 tahun</h5>
                </div>
                <div class="diskusi2">
                    <h5>Jelas boleh karena minimal usia yang boleh di vaksin ialah 12 tahun</h5>
                </div>
                <div class="diskusi2">
                    <h5>Boleh bro</h5>
                </div>
            </div>
        </div> -->
    <script>
        function openFormDiskusii() {
            document.getElementById("openpopupdiskusi").style.display = "block";
        }

        function closeFormDiskusii() {
            document.getElementById("openpopupdiskusi").style.display = "none";
        }
    </script>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>