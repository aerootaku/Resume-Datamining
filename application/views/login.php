<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title><?= $title; ?></title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url('public/assets'); ?>/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('public/assets'); ?>/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('public/assets'); ?>/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="<?= base_url('public/assets'); ?>/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url('public/assets'); ?>/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('<?= base_url('public/assets'); ?>/media/photos/photo6@2x.jpg');">
                    <div class="hero-static bg-white-95">
                        <div class="content">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4">
                                    <!-- Sign In Block -->
                                    <div class="block block-themed block-fx-shadow mb-0">
                                        <div class="block-header">
                                            <h3 class="block-title">Sign In</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                                <h1 class="mb-2">Admin Login</h1>
                                                <p>Welcome, please login.</p>
												<?php if (isset($error)): ?>
												<div class="alert alert-danger">
													<p><?= $error; ?></p>
												</div>
												<?php endif; ?>
                                                <!-- Sign In Form -->
                                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                                                <?php echo form_open(base_url('login/authenticate'), array('class'=>'js-validation-signin')); ?>
                                                    <div class="py-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-alt form-control-lg" id="username" name="username" placeholder="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-alt form-control-lg" id="password" name="password" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6 col-xl-5">
                                                            <button type="submit" class="btn btn-block btn-primary" name="login">
                                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                            </button>
                                                        </div>
                                                    </div>
                                                <?php echo form_close(); ?>
                                                <!-- END Sign In Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Sign In Block -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out <?= base_url('public/assets'); ?>/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the <?= base_url('public/assets'); ?>/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            <?= base_url('public/assets'); ?>/js/core/jquery.min.js
            <?= base_url('public/assets'); ?>/js/core/bootstrap.bundle.min.js
            <?= base_url('public/assets'); ?>/js/core/simplebar.min.js
            <?= base_url('public/assets'); ?>/js/core/jquery-scrollLock.min.js
            <?= base_url('public/assets'); ?>/js/core/jquery.appear.min.js
            <?= base_url('public/assets'); ?>/js/core/js.cookie.min.js
        -->
        <script src="<?= base_url('public/assets'); ?>/js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at <?= base_url('public/assets'); ?>/_es6/main/app.js
        -->
        <script src="<?= base_url('public/assets'); ?>/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?= base_url('public/assets'); ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url('public/assets'); ?>/js/pages/op_auth_signin.min.js"></script>
    </body>
</html>
