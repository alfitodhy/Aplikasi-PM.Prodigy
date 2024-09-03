<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('title') ?></title>
    <meta name="author" content="snippets-code" />
    <meta name="description" content="<?php echo config('meta_description') ?>">
    <link rel="shortcut icon" href="<?php echo site_url() ?>/cdn/about/<?php echo config('favicon') ?>"
        type="image/x-icon">


    <?php if (config('direction') == 'ltr'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/stylepm.css" type="text/css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/owl.css" type="text/css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/card.css" type="text/css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/chat.css" type="text/css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/payment.css" type="text/css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/style-ar.css" type="text/css">
    <?php endif ?>

</head>

<body>
    <!-- <div id="preloader">
            <div class="boxplus-load"></div>
        </div> -->
    <!-- ==================== Header Area Start ==================== -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-md-2">
                    <div class="logo_area">
                        <a href="<?php echo site_url() ?>">
                            <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>"
                                style="width: 60%; margin-left: 60px;" alt=" <?php echo config('title') ?>">
                        </a>
                    </div>
                </div>

                <nav class="main-nav">
                    <div class="menu_area text-right">
                        <nav id="nav-menu">
                            <ul id="nav">
                                <li class="scroll-to-section"><a href="<?php echo site_url() ?>"><i class=""
                                            aria-hidden="true"></i>&nbsp;Home</a></li>
                                <li class="scroll-to-section"><a href="<?php echo site_url('training') ?>"><i class=""
                                            aria-hidden="true"></i>&nbsp;Training</a></li>
                                <li class="scroll-to-section"><a href="<?php echo site_url('community') ?>"><i class=""
                                            aria-hidden="true"></i>&nbsp;Job Community</a></li>
                                <li class="scroll-to-section"><a href="<?php echo site_url('knowledge_base') ?>"><i
                                            class="" aria-hidden="true"></i>&nbsp;Article</a></li>
                                <li class="scroll-to-section"><a href="<?php echo site_url('home/contact') ?>"><i
                                            class="" aria-hidden="true"></i>&nbsp;Contact</a></li>
                                <li class="scroll-to-section"><a href="<?php echo site_url('home/about') ?>"><i class=""
                                            aria-hidden="true"></i>&nbsp;About Us</a></li>
                                <li class="scroll-to-section">
                                    <?php if (!(user())): ?>
                                        <div class="border-button">
                                            <a href="javascript:popup_switch('login')" class="gradient-button"><i
                                                    class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Log In</a>
                                        </div>
                                    <?php else: ?>
                                        <div class="client-log">
                                            <a href="<?php echo site_url('dashboard/settings') ?>" class="user-login">
                                                <span>
                                                    <?php if (user()->image): ?><img
                                                            src="<?php echo base_url() ?>/cdn/users/<?php echo user()->image ?>"
                                                            alt="<?php echo user()->username ?>"> <?php endif ?>
                                                    <?php if (!(user()->image)): ?><img
                                                            src="<?php echo base_url() ?>/cdn/users/default.png"
                                                            alt="<?php echo user()->username ?>"> <?php endif ?>
                                                </span>
                                            </a>
                                            <a href="<?php echo site_url('dashboard/tickets') ?>" class="user-icon"><i
                                                    class="fa fa-commenting"></i></a>
                                            <a href="<?php echo site_url('account/logout') ?>"
                                                class="user-icon power-user"><i class="fa fa-power-off"></i></a>
                                        </div>
                                    <?php endif ?>
                            </ul>
                        </nav>
                    </div>
            </div>
    </header>



    <div class="main-content2">
        {layout}
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form id="search" action="#" method="GET">
                    </form>
                </div>
            </div>



            <div class="row">
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <p><a href="#">+62 8117781201</a></p>
                        <p><a href="mailto:admin@pm-prodigy.com">admin@pm-prodigy.com</a></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4>Dashboard Menu</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="<?php echo site_url('training') ?>">Training</a></li>
                            <li><a href="<?php echo site_url('community') ?>">Community</a></li>
                            <li><a href="<?php echo site_url('knowledge_base') ?>">Article</a></li>
                            <li><a href="<?php echo site_url('home/contact') ?>">Contact</a></li>
                            <li><a href="<?php echo site_url('home/about') ?>">About Us</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4>Social Media</h4>
                        <ul>
                            <li><a href="https://www.linkedin.com/company/pm-prodigy/">LinkedIn</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4>Address</h4>
                        <p>Jl. HR Rasuna Said Kav C-5 Gd Wirausaha Lt.1 Unit 104, Karet, Setiabudi</p>
                        <p>Jakarta Selatan, DKI Jakarta, 12940</p>
                    </div>
                </div>



                <div class="col-sm-3">
                    <div class="footer-widget">
                        <h4>About Our Company</h4>
                        <div class="icon">
                            <img src="<?php echo STYLE_IMAGES ?>/logopm.png" class="img-responsive"
                                alt="<?php echo config('title') ?>" />
                        </div>
                        <p>Join us at PM Prodigy as we embark on this exciting journey of knowledge, growth,
                            and
                            empowerment in the world of project management. Together, we can shape a
                            brighter future
                            for
                            project managers and aspiring talents across the globe.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © 2024 PM. Prodigy. All Rights Reserved.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <?php if (!user()): ?>
            <div class="modal fade loginModel" role="dialog">
                <div class="modal-dialog login-model">
                    <div class="modal-content">
                        <div class="modal-body">
                            <i class="fa fa-times-circle close" aria-hidden="true" data-dismiss="modal"></i>
                            <div class="clearfix"></div><br />
                            <div class="notification error closeable login_errors alert-danger alert" style="display: none;">
                            </div>
                            <form class="popup_login" method="post" autocomplete="off">
                                <p class="login-icon">
                                    <i class="pe-7s-user"></i>
                                    <b>Selamat Datang,</b> tertarik konsultasi dengan PM-Prodigy?Silakan Register atau Login
                                </p>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <label class="check-text" for="user-session-remember-me">
                                                <input name="remember" type="checkbox" tabindex="4" value="1"
                                                    checked="checked" />
                                                <span class="chk-img"></span>
                                                <a id="remember-button">tetap terhubung</a>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <a href="javascript:popup_switch('forgot')" class="forget-pass">Lupa
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button color big">Login
                                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                    </button>
                                </div>
                            </form>

                            <form class="popup_register" method="post">
                                <p class="login-icon">
                                    <i class="pe-7s-id"></i>
                                    <b>Selamat datang</b>
                                </p>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password_2"
                                        placeholder="Konfirmasi Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button color big">Registrasi
                                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                    </button>
                                </div>
                            </form>

                            <form class="popup_forgot" method="post">
                                <p class="login-icon">
                                    <i class="pe-7s-lock"></i>
                                    Masukkan email untuk mengambalikan password
                                </p>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button color big">Reset password
                                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p class="popup_login">Tidak punya akun? <a href="javascript:popup_switch('register')">Registrasi
                                    sekarang</a>
                            </p>
                            <p class="popup_forgot">Belum Punya akun? <a href="javascript:popup_switch('register')">Registrasi
                                    sekarang</a>
                            </p>
                            <p class="popup_register">Sudah Punya akun? <a href="javascript:popup_switch('login')">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    <?php endif ?>

    <!-- ============= All JS ============= -->
    <script>
        var site_url = '<?php echo site_url() ?>';
    </script>
    <script src="<?php echo STYLE_JS ?>/jquery-2.2.4.min.js"></script>
    <script src="<?php echo STYLE_JS ?>/bootstrap.js"></script>
    <script src="<?php echo STYLE_JS ?>/plugins.js"></script>
    <script src="<?php echo STYLE_JS ?>/jquery-printme.min.js"></script>
    <script src="<?php echo STYLE_JS ?>/switcher.js"></script>
    <script src="<?php echo STYLE_JS ?>/custom.js"></script>
    <script src="<?php echo STYLE_JS ?>/owl-carousel.js"></script>
    <script src="<?php echo STYLE_JS ?>/animation.js"></script>
    <script src="<?php echo STYLE_JS ?>/imagesloaded.js"></script>
    <script src="<?php echo STYLE_JS ?>/swiper.js"></script>
    <script src="<?php echo STYLE_JS ?>/chat.js"></script>

</body>

</html>