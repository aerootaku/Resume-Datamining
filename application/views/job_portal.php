<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Resume Classifier using Data Mining</title>

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
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-image" style="background-image: url('<?= base_url('public/assets'); ?>/media/photos/photo36@2x.jpg');">
                    <div class="hero bg-black-75 overflow-hidden">
                        <div class="hero-inner">
                            <div class="content content-full text-center">
                                <div class="mb-5 invisible" data-toggle="appear" data-class="animated fadeInDown">
                                    <i class="fa fa-briefcase fa-3x text-primary"></i>
                                </div>
                                <h1 class="display-4 font-w600 mb-3 text-white invisible" data-toggle="appear" data-class="animated fadeInDown">
                                    Resume Classifier using Data Mining
                                </h1>
                                <h2 class="h3 font-w400 text-white-50 mb-5 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                                    Explore new jobs and get your resume reviewed automatically
                                </h2>
                                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <a class="btn btn-success px-4 py-2" data-toggle="click-ripple" href="<?php echo base_url('job_portal/download') ?>">
                                        <i class="fa fa-fw fa-download mr-1"></i> Resume Format
                                    </a>
                                </span>
                                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="#one-versions">
                                        <i class="fa fa-fw fa-rocket mr-1"></i> Get Started
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="hero-meta">
                            <div class="js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="450">
                                <span class="d-inline-block animated slideInDown infinite">
                                    <i class="fa fa-angle-down text-white-50 fa-2x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Remastered -->
                <div id="one-versions" class="bg-white">
                    <div class="content content-full">
                        <div class="py-5 text-center">
                            <h2 class="h1 mb-2">
                                Job List
                            </h2>
                            <h3 class="font-w400 text-muted mb-5">
                                Check our Latest Job List
                            </h3>
                            <div class="row">
								<?php foreach ($job_model->get_jobs_open() as $row): ?>

                                <div class="col-sm-6 col-md-4 col-xl-3" >
									<a href="" data-toggle="modal" data-target="#apply<?= $row['id']; ?>">
                                    <!-- Bootstrap 4 -->
                                    <div class="block block-rounded block-fx-pop">
                                        <div class="block-content block-content-full">
                                            <div class="item item-rounded bg-amethyst-lighter mx-auto my-4">
                                                <i class="fa fa-2x fa-briefcase text-amethyst"></i>
                                            </div>
                                            <h4 class="mb-2"><?= $row['job_name']; ?></h4>
											<span class="text-center"><?= $row['company_name']; ?> - <?= $row['location']; ?></span>
                                            <p class="font-size-md text-left text-muted">
												<?= $row['job_description']; ?>
                                            </p>
											<p class="font-size-sm text-left text-muted">
												<i class="fa fa-bars"></i> Skills Needed: <?= $row['skills']; ?>
											</p>
											<p class="font-size-sm text-left text-muted">
												<i class="fa fa-calendar"></i> Years of Experience: <?= $row['year_experience']; ?> Years
											</p>
                                        </div>
                                    </div>
                                    <!-- END Bootstrap 4 -->
									</a>
                                </div>

								<?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Remastered -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
		<?php foreach ($job_model->get_jobs() as $row): ?>
		<div class="modal fade" id="apply<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
			<div class="modal-dialog modal-dialog-popin" role="document">
				<div class="modal-content">
					<?php echo form_open_multipart(base_url('job_portal/apply')); ?>
					<div class="block block-themed block-transparent mb-0">
						<div class="block-header bg-primary-dark">
							<h3 class="block-title"><?= $row['job_name']; ?></h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-fw fa-times"></i>
								</button>
							</div>
						</div>
						<div class="block-content font-size-sm">
							<div class="panel panel-default">
								<div class="panel-body">
									<h3 class="text-center">Submit your application for the job <strong><?= $row['job_name']; ?></strong>?</h3>
								</div>
							</div>
							<fieldset style="border: 2px">
								<p>Personal Information</p>
								<div class="form-group">
									<label>Resume</label>
									<input type="file" class="form-control" name="resume" required />
								</div>
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control" name="firstname" required />
								</div>
								<div class="form-group">
									<label>Middle Name</label>
									<input type="text" class="form-control" name="middlename" />
								</div>
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" class="form-control" name="lastname" required />
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address" required></textarea>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" required />
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="tel" class="form-control" name="contact" required />
								</div>
								<div class="form-group">
									<label>Gender</label>
									<br />
									<input type="radio" class="radio" name="gender" value="Male" />Male
									<input type="radio" class="radio" name="gender" value="Female" />Female
								</div>
								<input type="hidden" name="job_applied" value="<?= $row['job_name']; ?>" />
								<input type="hidden" name="job_id" value="<?= $row['job_rno']; ?>" />
								<input type="hidden" name="job_skill" value="<?= $row['skills']; ?>" />
							</fieldset>
						</div>
						<div class="block-content block-content-full text-right border-top">
							<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-sm btn-primary" name="apply"><i class="fa fa-check mr-1"></i>Apply to this job</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
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
		<script src="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="<?= base_url('public/assets'); ?>/js/oneui.app.min.js"></script>

		<?php if($this->session->flashdata('msg')): ?>
			<script>
				jQuery(function () {
					One.helpers('notify', {type: 'success', icon: 'fa fa-info-circle mr-1', message: '<?php echo $this->session->flashdata('msg'); ?>'});
				});
			</script>
		<?php endif; ?>
    </body>
</html>
