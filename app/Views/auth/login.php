<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/login/css/sb-admin-2.min.css" rel="stylesheet">

</head>


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                        </div>
                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success mt-2" role="alert">

                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <form class="" action="/auth" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email addres" name="email" id="email" value="">



                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                <?= session('Password', '<small class="text-danger pl-1">', '</small>'); ?>

                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block mt-2">Login</button></a>
                    </div>



                    <hr>
                    <div class="text-center ">
                        <a class="small " href="forgot-password.html ">Forgot Password <a class="small" href="/auth/register"> <span>Buat Akun Baru</span> </a>
                    </div>
                    <hr>

                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger " role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>