<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="<?php echo site_url() ?>/cdn/about/<?php echo config('favicon') ?>"
        type="image/x-icon" />
    <title><?php echo config('title') ?> - Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <?php if (config('direction') == 'ltr'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/bootstrap.css">
    <?php endif ?>
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/core.css">
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/forms.css">
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/components.css">
    <?php if (config('direction') == 'ltr'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/custom.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/custom.css">
    <?php endif ?>
    <script src="<?php echo STYLE_JS ?>/jquery-1.11.1.min.js"></script>
</head>



<script type="text/javascript">
    jQuery(document).ready(function ($) {

        setTimeout(function () {
            $(".fade-in-effect").addClass('in');
        }, 1);

        $("form#login .form-group:has(.form-control):first .form-control").focus();
    });
</script>


<section class="bg-primary py-3 py-md-5 py-xl-8 h-100">
    <div class="container h-100">
        <div class="row h-100 gy-4 align-items-center">

            <div class="col-12 col-md-6 col-xl-7">
                <div class="d-flex justify-content-center text-bg-primary">
                    <div class="col-12 col-xl-9">
                        <a href="<?php echo site_url() ?>" class="logo">
                            <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>"
                                alt="<?php echo config('title') ?>" width="200" />
                        </a>

                        <h1 class="display-1" style="font-weight: bold;">Aplikasi Konsultasi PM. Prodigy</h1>
                        <h3>Silahkan Login untuk akses halaman administrator</h3>

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-5">
                <div class="card border-0 rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h3>Sign in</h3>
                                    <p>Silahkan Masukkan Username dan Password</a></p>
                                </div>
                            </div>
                        </div>


                        <?php echo form_open(false, 'class="login-form fade-in-effect"') ?>


                        <?php if (validation_errors()): ?>
                            <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                        <?php endif ?>
                        <div class="row gy-3 overflow-hidden">

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" name="email"
                                            value="<?php echo set_value('email') ?>" class="form-control"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password"
                                            class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg" value="Login">
                                            <i class="fa fa-lock"></i>
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
                <script src="<?php echo STYLE_JS ?>/bootstrap.min.js"></script>

            </div>
        </div>
    </div>
</section>