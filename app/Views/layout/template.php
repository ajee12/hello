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

    <?= $this->include('/layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>


    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->

            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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