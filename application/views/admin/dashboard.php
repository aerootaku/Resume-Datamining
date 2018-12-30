<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Resume Classifier</title>

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
		<!-- Page JS Plugins CSS -->
		<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
		<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
		<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/select2/css/select2.min.css">
		<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
		<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css">
		<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/dropzone/dist/min/dropzone.min.css">
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url('public/assets'); ?>/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->

        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="">
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h6">RESUME CLASSIFIER</span>
                        </span>
                    </a>
                    <!-- END Logo -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
				<?php include 'layout/sidebar.php'; ?>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->

                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
					<?php include 'layout/header.php'; ?>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-image overflow-hidden" style="background-image: url('<?= base_url('public/assets'); ?>/media/photos/photo3@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-narrow content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                                <div class="flex-sm-fill">
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                                    <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Welcome <?php echo $this->session->userdata('username');  ?></h2>
                                </div>
                                <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                    <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                        <a class="btn btn-primary px-4 py-2" data-toggle="modal" data-target="#createJob" style="color: white">
                                            <i class="fa fa-plus mr-1"></i> New Job Offer
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3 offset-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Job Offer</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?php
										echo $job_model->count_all();
										?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Applicants</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?php
										echo $applicant_model->count_all();
										?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Stats -->

                    <!-- Customers and Latest Orders -->
                    <div class="row row-deck">
                        <!-- Latest Customers -->
                        <div class="col-lg-6">
                            <div class="block block-mode-loading-oneui">
                                <div class="block-header border-bottom">
                                    <h3 class="block-title">Latest Jobs</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-settings"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                                        <thead class="thead-dark">
                                            <tr class="text-uppercase">
                                                <th class="font-w700" style="width: 80px;">Job ID</th>
                                                <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 100px;">Job Name</th>
                                                <th class="font-w700">Description</th>
                                                <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 80px;">Skills</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($job_model->get_limit(5) as $row): ?>
											<tr>
												<td class="text-center font-size-sm">
													<?= $row['job_rno']; ?>
												</td>
												<td class="font-w600 font-size-sm">
													<?= $row['job_name']; ?>
												</td>
												<td class="d-none d-sm-table-cell font-size-sm">
													<?= $row['job_description']; ?>
												</td>
												<td class="d-none d-sm-table-cell">
													<span class="badge badge-info"><?= $row['skills']; ?></span>
												</td>

											</tr>
										<?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Latest Customers -->

                        <!-- Latest Orders -->
                        <div class="col-lg-6">
                            <div class="block block-mode-loading-oneui">
                                <div class="block-header border-bottom">
                                    <h3 class="block-title">Latest Applicants</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-settings"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                                        <thead class="thead-dark">
                                            <tr class="text-uppercase">
                                                <th class="font-w700">ID</th>
                                                <th class="d-none d-sm-table-cell font-w700">Name</th>
                                                <th class="font-w700">Address</th>
                                                <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Gender</th>
                                                <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Job Applied</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($applicant_model->get_limit(5) as $row): ?>
											<tr>
												<td class="text-center font-size-sm">
													<?= $row['applicant_id']; ?>
												</td>
												<td class="font-w600 font-size-sm">
													<?= $row['firstname']. $row['lastname']; ?>
												</td>
												<td class="d-none d-sm-table-cell font-size-sm">
													<?= $row['address']; ?>
												</td>
												<td class="d-none d-sm-table-cell">
													<span class="badge badge-info"><?= $row['gender']; ?></span>
												</td>
												<td>
													<em class="text-muted font-size-sm"><?= $row['job_applied']; ?></em>
												</td>
											</tr>
										<?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Latest Orders -->
                    </div>
                    <!-- END Customers and Latest Orders -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-12 order-sm-2 py-1 text-center text-sm-right">
                           Resume Classifier
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

            <!-- Apps Modal -->

        </div>
		<div class="modal fade" id="createJob" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
			<div class="modal-dialog modal-dialog-popin" role="document">
				<div class="modal-content">
					<?php echo form_open(base_url('admin/job_offer/create')); ?>
					<div class="block block-themed block-transparent mb-0">
						<div class="block-header bg-primary-dark">
							<h3 class="block-title">New Job</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-fw fa-times"></i>
								</button>
							</div>
						</div>
						<div class="block-content font-size-sm">
							<div class="form-group">
								<label>Job Name</label>
								<input type="text" class="form-control" name="job_name" required />
							</div>

							<div class="form-group">
								<label>Description</label>
								<textarea name="job_description" class="form-control" rows="5" required></textarea>
							</div>
							<div class="form-group">
								<label>Company Name</label>
								<textarea class="form-control" name="company_name" rows="4" required></textarea>
							</div>
							<div class="form-group">
								<label>Location</label>
								<input type="text" class="form-control" name="location" required />
							</div>
							<div class="form-group">
								<label>Skills Needed</label>
								<select name="skills[]" class="form-control" multiple required>
									<?php foreach ($skills as $row): ?>
									<option value="<?= $row['skill']; ?>"><?= $row['skill']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Years Experience</label>
								<select name="experience" class="form-control" required>
									<option value="1">1 Year</option>
									<option value="2">2 Years</option>
									<option value="3">3 Years</option>
									<option value="4">4 Years</option>
									<option value="5">5 Years</option>
									<option value="6">6 Years</option>
									<option value="7">7 Years</option>
									<option value="8">8 Years</option>
									<option value="9">9 Years</option>
									<option value="10">10 Years</option>
								</select>
							</div>
						</div>
						<div class="block-content block-content-full text-right border-top">
							<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-sm btn-primary" name="create"><i class="fa fa-check mr-1"></i>Save</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
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
		<!-- Page JS Plugins -->

        <script src="<?= base_url('public/assets'); ?>/js/oneui.app.min.js"></script>
		<!-- Page JS Plugins -->
		<script src="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<script src="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
		<script src="<?= base_url('public/assets'); ?>/js/plugins/select2/js/select2.full.min.js"></script>
		<script src="<?= base_url('public/assets'); ?>/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
		<script src="<?= base_url('public/assets'); ?>/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
		<script src="<?= base_url('public/assets'); ?>/js/plugins/dropzone/dropzone.min.js"></script>
		<script src="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?= base_url('public/assets'); ?>/js/plugins/chart.js/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url('public/assets'); ?>/js/pages/be_pages_dashboard.min.js"></script>
		<script>jQuery(function(){ One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>
    </body>
</html>
