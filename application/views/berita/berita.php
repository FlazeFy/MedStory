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
    <div class="container">
        <div class="box">
            <h2>Berita</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editberita">Tambah Berita</button>
            <br>
            <br>
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto Berita</th>
                        <th>Nama Berita</th>
                        <th>Tanggal</th>
                        <th>Isi Berita</th>
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($dataBerita as $db) { ?>
                        <tr>
                            <form action="" method="post">
                                <td><?php echo $no++ ?>
                                <td><?php echo $db['fotoberita'] ?></td>
                                <td><?php echo $db['namaberita'] ?></td>
                                <td><?php echo $db['tanggal'] ?></td>
                                <td><?php echo $db['isiberita'] ?></td>
                                <td><a type="button" class="btn btn-success" href="<?= base_url(); ?>ViewBerita/index/<?= $db['id_berita'] ?>">Lihat</a></td>
                                <td><button type=" button" class="btn btn-warning" data-toggle="modal" data-target="editberita<?php echo $db['id_berita'] ?>">Edit</button></td>
                                <td><a type="button" class="btn btn-danger" href="<?= base_url(); ?>InputBerita/hapus_Berita/<?= $db['id_berita'] ?>" onClick="return confirm(' Apakah Anda Yakin?')">Hapus</a></td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tambah Berita -->
    <div class="modal fade" id="editberita" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Tambah Data Berita</h1>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('InputBerita/Berita') ?>" enctype="multipart/form-data">
                        <?php if (isset($error_message)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error_message ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="namaberita">Nama Berita</label>
                            <input type="text" class="form-control" id="namaberita" placeholder="Nama Berita" name="namaberita" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Foto Berita</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
                                <label class="custom-file-label text-left" for="uploadImage">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="isiberita">Isi Berita</label>
                            <textarea type="text" class="form-control" id="isiberita" placeholder="Isi Berita" name="isiberita" required style="height: 250px;"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="cancel" class="btn btn-secondary">Batal</button>
                            <input type="submit" class="btn btn-primary" id="inputBerita" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Edit Berita -->
    <?php $no = 1;
    foreach ($dataBerita as $db) { ?>
        <div class="modal fade" id="edit<?php echo $db['id_berita'] ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Edit DataBerita </h2>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Input_Berita_Model/editBerita'; ?>">
                            <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id_berita" name="id_berita" value="<?php echo $db['id_berita'] ?>" required>
                            <form method="post" action="<?= base_url('InputBerita/Berita') ?>" enctype="multipart/form-data">
                                <?php if (isset($error_message)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error_message ?>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label for="namaberita">Nama Berita</label>
                                    <input type="text" class="form-control" id="namaberita" placeholder="Nama Berita" name="namaberita" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal" required>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Foto Berita</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
                                        <label class="custom-file-label text-left" for="uploadImage">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="isiberita">Isi Berita</label>
                                    <textarea type="text" class="form-control" id="isiberita" placeholder="Isi Berita" name="isiberita" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary">Batal</button>
                                    <input type="submit" class="btn btn-primary" id="inputBerita" value="Submit">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Tambah Berita -->
    <div class="modal fade" edit<?php echo $db['id_berita'] ?> tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Edit Data Berita</h1>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('InputBerita/Berita') ?>" enctype="multipart/form-data">
                        <?php if (isset($error_message)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error_message ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="namaberita">Nama Berita</label>
                            <input type="text" class="form-control" id="namaberita" placeholder="Nama Berita" name="namaberita" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Foto Berita</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
                                <label class="custom-file-label text-left" for="uploadImage">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isiberita">Isi Berita</label>
                            <textarea type="text" class="form-control" id="isiberita" placeholder="Isi Berita" name="isiberita" required style="height: 250px;"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="cancel" class="btn btn-secondary">Batal</button>
                            <input type="submit" class="btn btn-primary" id="inputBerita" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>