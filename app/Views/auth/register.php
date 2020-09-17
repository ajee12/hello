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

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register</h1>
                        </div>
                        <form class="" method="post" action="<?= base_url('/auth/register') ?> ">
                            <div class="form-group">
                                <input type="text" class="form-control " id="username" name="username" placeholder="Username" value="">


                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " id="email" name="email" placeholder="Email Address" value="">

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control " id="password" name="password" placeholder="Password">

                                </div>

                                <div class="col-sm-6">
                                    <input type="password" class="form-control " id="password_confirm" name="password_confirm" placeholder="confirm password">
                                </div>
                            </div>
                            <?php if (isset($validation)) : ?>
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href=>Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/auth">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>