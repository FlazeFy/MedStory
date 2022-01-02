<!DOCTYPE html>
<html>

<head>
    <title>Berita_1302194024</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/mycss.css">

    <!--CDN Bootstrap CSS-->
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <?php foreach ($dataBerita as $db) {
        echo "
    <div class='berita' id='viewberita" . $db['id_berita'] . "' style='margin: 2%;'>
        <h1>" . $db['namaberita'] . " </h1>
        <br>
        <img src='assets/uploads/" . $db['fotoberita'] . "'>
        <br>
        <h5>Date : " . $db['tanggal'] . " </h5>
        <br>
        <h5>" . $db['isiberita'] . " </h5>
        <br>
    </div>";
    }
    ?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>


</html>