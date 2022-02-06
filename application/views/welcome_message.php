<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/form/fonts') ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/form') ?>/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/form') ?>/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('assets/form') ?>/css/style.css">




    <title>WhatsApp Gateway</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <script src="<?= base_url('lib/'); ?>app.js"> </script>
                    <img src="<?= base_url('assets/form/') ?>images/undraw_file_sync_ot38.svg" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>WhatsApp <strong>Base</strong></h3>
                                <?= $this->session->flashdata('message') ; ?>
                            </div>
                            <form action="<?= base_url('Welcome/kirim_pesan'); ?>" method="post">
                                <div class="form-group first">
                                    <!-- <label for="username">No tujuan</label> -->
                                    <select name="tujuan" id="tujuan">
                                        <option value="">--No Tujuan--</option>
                                        <?php foreach ($list as $key) {
                                        ; ?>
                                        <option value="<?= $key->no_tujuan; ?>">
                                            <?= $key->no_tujuan; ?>
                                        </option>
                                        <?php } ; ?>

                                    </select>

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="text">isi pesan</label>
                                    <input type="text" class="form-control" id="isi" name="isi">

                                </div>



                                <input type="submit" value="kirim" class="btn text-white btn-block btn-primary">

                            </form>
                            <center>
                                <span style="color: #6c757d;">atau</span>
                            </center>

                            <div class="card">
                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal">
                                    tampbahkan nomor tujuan</button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('welcome/AddNumber'); ?>">

                        <label> No WhatsApp </label><br>
                        <input type="text" pattern="[0-9]{12/14}" id="awal" name="awal" value="62">
                        <?= form_error('awal', '<small class="text-danger pl-2">', '</small>'); ?>


                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
                            <!-- <button type="submit" class="btn btn-success" data-dismiss="modal">Simpan</button> -->
                            <td colspan="2"><input class="btn btn-success" type="submit" name="save"
                                    value="Save Data" /></td>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="<?= base_url('assets/form/'); ?>js/jquery-3.3.1.min.js">
</script>
<script src="<?= base_url('assets/form/'); ?>js/popper.min.js">
</script>
<script src="<?= base_url('assets/form/'); ?>js/bootstrap.min.js">
</script>
<script src="<?= base_url('assets/form/'); ?>js/main.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</html>