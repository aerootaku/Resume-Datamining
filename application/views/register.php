<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.phoenixcoded.net/dash-able/bootstrap/default/regis.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 14:53:02 GMT -->
<head>

<?php $this->load->view('includes/title'); ?>

    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php $this->load->view('includes/meta'); ?>

    <link rel="icon" href="http://html.phoenixcoded.net/dash-able/bootstrap/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/'); ?>files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('bootstrap/'); ?>files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/'); ?>files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/'); ?>files/assets/css/font-awesome-n.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/'); ?>files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/'); ?>files/assets/css/pages.css">
</head>
<body themebg-pattern="theme1">
<section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                    <?php echo form_open(base_url('register/register_user'), array('class'=>'md-float-material form-material')); ?>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
                            <?php if(validation_errors()) { ?>
                                <?php echo validation_errors(); ?>
                            <?php } ?>
                            <?php if($this->session->flashdata('msg')): ?>
                                <p><?php echo $this->session->flashdata('msg'); ?></p>
                            <?php endif; ?>
                            <div class="form-group form-primary">
                                <input type="text" name="username" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Choose Username</label>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Your Email Address</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="password1" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Confirm Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="register">Sign up now</button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Already Registered?</p>
                                    <p class="text-inverse text-left"><a href="<?= base_url('login'); ?>"><b>Login now</b></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>

        </div>

    </div>

</section>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= base_url('bootstrap/'); ?>files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= base_url('bootstrap/'); ?>files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= base_url('bootstrap/'); ?>files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= base_url('bootstrap/'); ?>files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= base_url('bootstrap/'); ?>files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/assets/js/pace.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?= base_url('bootstrap/'); ?>files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/'); ?>files/assets/js/common-pages.js"></script>
</body>

</html>
