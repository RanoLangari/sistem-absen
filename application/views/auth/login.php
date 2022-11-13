<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRESENSI BIO SCIENCE | LOGIN</title>

    <link rel="icon" href="./assets/img/logo-undana-S.png">
    <link rel="logo-undana-L.png" href="./assets/img/logo-undana-L.png">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    body {
        background-image: url('./assets/img/bio-sains-view-depan.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Calibri;
    }
    </style>

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-5">
                <div style="background-color: #ffffff00;" class="card o-hidden border-0">
                    <div style="margin-top: 40%;" class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h3 style="color: white; letter-spacing: 1px; font-weight: 700;"><span
                                                style="color: #20897B">BIO SCIENCE</span>
                                            PRESENSI
                                            LOGIN</h3>
                                    </div>

                                    <?= $this->session->flashdata('message') ?>

                                    <form action="<?= base_url('auth') ?>" method="post" class="user">
                                        <div class="form-group">
                                            <input style="border-radius: 0;" type="email"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Email" name="email">
                                            <?= form_error('email', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input style="border-radius: 0;" type="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password" name="password">
                                            <?= form_error('password', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                                        </div>

                                        <button style="border-radius: 0;" type="submit"
                                            class="btn btn-success btn-user btn-block">
                                            LOGIN
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>