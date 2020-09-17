<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/template/assets/img/favicon.png" rel="icon">
    <link href="/template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/template/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/template/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/template/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/template/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Rapid - v2.2.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
    $session = session();
    ?>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
        <div class="container d-flex justify-content-end">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center">

            <h3 class="logo mr-auto"><a href="index.html">Racademy</a></h3>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="main-nav d-none d-lg-block">
                <ul>

                    <?php if ($session->get('id_user')) : ?>
                        <li class="active"><a href="/home">Home</a></li>
                        <li><a href="/auth/logout">Logout</a></li>
                    <?php endif ?>
                    <li class="active"><a href="">Jadwal</a></li>
                    <li class="active"><a href="/home/i_trainer">Info Trainer</a></li>


                </ul>
            </nav><!-- .main-nav-->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="my-3">Daftar Trainer</h2>
                            <hr>
                            <form action="/home/save" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <label for="id_user"></label>
                                <input type="hidden" value="<?= session()->get('id'); ?>" id="id_user" name=" id_user"> <?= form_open('/home/trainer') ?>

                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= ($validation->hasError('nama')) ?
                                                                                    'is-invalid' : ''; ?> " id="nama" name="nama" autofocus value="<?= old('nama'); ?>">

                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama'); ?>
                                        </div>

                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-3 col-form-label">No hp</label>
                                    <div class="col-sm-9">
                                        <input type="number" min="0" class="form-control  <?= ($validation->hasError('no_hp')) ?
                                                                                                'is-invalid' : ''; ?> " id="no_hp" name="no_hp" autofocus value="<?= old('no_hp'); ?>">

                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no_hp'); ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= ($validation->hasError('alamat')) ?
                                                                                    'is-invalid' : ''; ?>" id="alamat" name="alamat" autofocus value="<?= old('Alamat'); ?>">

                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="propopasl" class="col-sm-3 col-form-label">Proposal </label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input <?= ($validation->hasError('proposal')) ?
                                                                                            'is-invalid' : ''; ?>" id="proposal" name="proposal" onchange="previewFile()">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('proposal'); ?>
                                            </div>
                                            <label class="custom-file-label" for="Proposal">Pilih File..</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jn_trainer" class="col-sm-3 col-form-label">Trainer</label>
                                    <div class="col-sm-9">


                                        <select class="form-control <?= ($validation->hasError('jn_trainer')) ?
                                                                        'is-invalid' : ''; ?>" id="jn_trainer" name="jn_trainer">
                                            <option>Pilih Trainer</option>
                                            <option>Webinar</option>
                                            <option>Pelatihan</option>
                                            <option>Vidio Trainer</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Daftar</button>


                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>

        </div>
        </div>
        </div>

        </div>
        </div>

    </section><!-- End Hero -->




    <!-- Vendor JS Files -->
    <script src="/template/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/template/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/template/assets/vendor/php-email-form/validate.js"></script>
    <script src="/template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/template/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/template/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/template/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/template/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/template/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="/template/assets/js/main.js"></script>

</body>

</html>