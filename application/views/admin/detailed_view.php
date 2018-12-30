<?php
function getBetween($content,$start,$end){
	$r = explode($start, $content);
	if (isset($r[1])){
		$r = explode($end, $r[1]);
		return $r[0];
	}
	return '';
}
?>

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
	<!-- Page JS Plugins CSS -->
	<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('public/assets'); ?>/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">

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
		<div class="bg-image" style="background-image: url('<?= base_url('public/assets') ?>/media/photos/photo8@2x.jpg');">
			<div class="bg-black-50">
				<div class="content content-full text-center">
					<div class="my-3">
						<i class="fa fa-briefcase fa-4x text-amethyst"></i>
					</div>
					<h1 class="h2 text-white mb-0"><?= $job['job_name']; ?></h1>
					<span class="text-white-75"><?= $job['job_description']; ?></span>
				</div>
			</div>
		</div>
		<!-- END Hero -->

		<!-- Stats -->
		<div class="bg-white border-bottom">
			<div class="content content-boxed">
				<div class="row items-push text-center">
					<div class="col-6 col-md-3">
						<div class="font-size-sm font-w600 text-muted text-uppercase">Applicants</div>
						<a class="link-fx font-size-h3" href="javascript:void(0)"><?= $applicant_model->count_specific_applicant($job['job_name']) ?></a>
					</div>
					<div class="col-6 col-md-3">
						<div class="font-size-sm font-w600 text-muted text-uppercase">Job Status</div>
						<a class="link-fx font-size-h3" href="javascript:void(0)"><?= $job['status']; ?></a>
					</div>
					<div class="col-6 col-md-3">
						<div class="font-size-sm font-w600 text-muted text-uppercase mb-2">Action</div>
						<button class="btn btn-warning" data-toggle="modal" data-target="#close">Close Job</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END Stats -->

		<!-- Page Content -->
		<div class="content content-boxed">
			<div class="row">
				<div class="col-md-7 col-xl-8">
					<!-- Updates -->
					<!-- Dynamic Table with Export Buttons -->
					<div class="block">
						<div class="block-header">
							<h3 class="block-title">Resume Ranking</small></h3>
						</div>
						<div class="block-content block-content-full">
							<!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
							<table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
								<thead>
								<tr>
									<th class="text-center">Applicant Name</th>
									<th>Email Address</th>
									<th class="d-none d-sm-table-cell" style="width: 30%;">Contact</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($nlp_model->show_rank($job['job_name']) as $row): ?>
									<tr>
										<td class="text-center font-size-sm">
											<?= $row['firstname'] . " " . $row['lastname']; ?>
										</td>
										<td class="font-w600 font-size-sm">
											<?= $row['email']; ?>
										</td>
										<td class="d-none d-sm-table-cell font-size-sm">
											<?= $row['contact']; ?>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END Dynamic Table with Export Buttons -->
					<!-- END Updates -->
				</div>
				<div class="col-md-5 col-xl-4">
					<!-- Products -->
					<div class="block">
						<div class="block-header block-header-default">
							<h3 class="block-title">
								<i class="fa fa-briefcase text-muted mr-1"></i> Applicants
							</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
									<i class="si si-refresh"></i>
								</button>
							</div>
						</div>
						<div class="block-content">
							<?php foreach ($applicant_model->get_applicant_specific($job["job_name"]) as $row): ?>
							<div class="media d-flex align-items-center push">
								<div class="mr-3">
									<a class="item item-rounded bg-info" href="" data-toggle="modal" data-target="#info<?= $row['id']; ?>">
										<i class="si si-users fa-2x text-white-75"></i>
									</a>
								</div>
								<div class="media-body">
									<div class="font-w600"><?= $row["lastname"] . " ". $row['firstname']; ?></div>
									<div class="font-size-sm"><?= $row['email']; ?></div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<!-- END Products -->
				</div>
			</div>
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
	<div class="modal fade" id="close" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
		<div class="modal-dialog modal-dialog-popin" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title">Close this Job from Applicant</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="fa fa-fw fa-times"></i>
							</button>
						</div>
					</div>
					<div class="block-content font-size-sm">
						<p>Are you sure you want to mark this job application as closed?</p>
					</div>
					<div class="block-content block-content-full text-right border-top">
						<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-sm btn-danger" name="update"><i class="fa fa-check mr-1"></i>Yes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php foreach ($applicant_model->get_applicant_specific($job["job_name"]) as $row): ?>
	<?php $applicant = $nlp_model->get_applicant($row['applicant_id']); ?>
		<div class="modal fade" id="info<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
			<div class="modal-dialog modal-dialog-popin" role="document">
				<div class="modal-content">
					<div class="block block-themed block-transparent mb-0">
						<div class="block-header bg-primary-dark">
							<h3 class="block-title"><?= $row['lastname'] . " ". $row['firstname']; ?> Record</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-fw fa-times"></i>
								</button>
							</div>
						</div>
						<div class="block-content font-size-sm">
							<div class="form-group">
									<center><i class="fa fa-2x fa-user text-center"></i><br />
								<h3 style="text-align: center" class="mb-0"><?= $row['firstname'] . " ". $row['lastname']; ?></h3>
								<span class="text-center"><?= $row['email']; ?></span></center>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="inline-block">
										<p style="font-style: normal">Skills: </p><span style="font-size: 14px">
											<?php echo $applicant['skills']; ?>
										</span>
									</div>
									<br />
									<div class="inline-block">
										<p>Work Experience - <?= $applicant['exp_year']; ?> Year(s)</p>
										<ul>
											<li><?= $applicant['experience']; ?></li>
										</ul>
									</div>
									<div class="inline-block">
										<p>Seminar and Training</p>
										<ul>
											<li><?= substr($applicant['seminar'], 15); ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block-content block-content-full text-right border-top">
							<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-sm btn-danger" name="create"><i class="fa fa-check mr-1"></i>Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
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
<script src="<?= base_url('public/assets'); ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('public/assets'); ?>/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('public/assets'); ?>/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url('public/assets'); ?>/js/plugins/datatables/buttons/buttons.print.min.js"></script>
<script src="<?= base_url('public/assets'); ?>/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url('public/assets'); ?>/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
<script src="<?= base_url('public/assets'); ?>/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url('public/assets'); ?>/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Page JS Code -->
<script src="<?= base_url('public/assets'); ?>/js/pages/be_tables_datatables.min.js"></script>

<?php if($this->session->flashdata('msg')): ?>
	<script>
		jQuery(function () {
			One.helpers('notify', {type: 'success', icon: 'fa fa-info-circle mr-1', message: '<?php echo $this->session->flashdata('msg'); ?>'});
		});
	</script>
<?php endif; ?>

<?php if($this->session->flashdata('update')): ?>
	<script>
		jQuery(function () {
			One.helpers('notify', {type: 'info', icon: 'fa fa-info-circle mr-1', message: '<?php echo $this->session->flashdata('update'); ?>'});
		});
	</script>
<?php endif; ?>

<?php if($this->session->flashdata('delete')): ?>
	<script>
		jQuery(function () {
			One.helpers('notify', {type: 'danger', icon: 'fa fa-info-circle mr-1', message: '<?php echo $this->session->flashdata('delete'); ?>'});
		});
	</script>
<?php endif; ?>
</body>
</html>
