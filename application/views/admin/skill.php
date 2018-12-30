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

		<!-- Page Content -->
		<div class="content">
			<!-- Dynamic Table with Export Buttons -->
			<div class="block">
				<div class="block-header">
					<h3 class="block-title">Skill List</small></h3>
					<button class="btn btn-success text-right btn-sm" data-target="#createJob" data-toggle="modal"><i class="fa fa-plus"></i> New Skill</button>
				</div>
				<div class="block-content block-content-full">
					<!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
					<table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
						<thead>
						<tr>
							<th>Name</th>
							<th>Actions</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($skills as $row): ?>
							<tr>
								<td>
									<?= $row['skill']; ?>
								</td>
								<td>
									<a data-toggle="modal" data-target="#edit<?= $row['id']; ?>" class="btn btn-sm btn-warning mr-1 mb-3">
										<i class="fa fa-fw fa-edit" style="color: white"></i>
									</a>
									<a data-toggle="modal" data-target="#delete<?= $row['id']; ?>" class="btn btn-sm btn-danger mr-1 mb-3">
										<i class="fa fa-fw fa-trash" style="color: white"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END Dynamic Table with Export Buttons -->
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
	<div class="modal fade" id="createJob" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
		<div class="modal-dialog modal-dialog-popin" role="document">
			<div class="modal-content">
				<?php echo form_open(base_url('admin/skills/create')); ?>
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
							<label>Skill Name</label>
							<input type="text" class="form-control" name="skill_name" required />
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

	<?php foreach ($skills as $row): ?>
		<div class="modal fade" id="edit<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
			<div class="modal-dialog modal-dialog-popin" role="document">
				<div class="modal-content">
					<?php echo form_open(base_url('admin/skills/update/'.$row['id'])); ?>
					<div class="block block-themed block-transparent mb-0">
						<div class="block-header bg-primary-dark">
							<h3 class="block-title">Update Skill</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-fw fa-times"></i>
								</button>
							</div>
						</div>
						<div class="block-content font-size-sm">
							<div class="form-group">
								<label>Skill Name</label>
								<input type="text" class="form-control" name="skill_name" value="<?= $row['skill']; ?>" required />
							</div>
						</div>
						<div class="block-content block-content-full text-right border-top">
							<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-sm btn-primary" name="update"><i class="fa fa-check mr-1"></i>Save</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

	<?php foreach ($skills as $row): ?>
		<div class="modal fade" id="delete<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
			<div class="modal-dialog modal-dialog-popin" role="document">
				<div class="modal-content">
					<?php echo form_open(base_url('admin/skills/remove/'.$row['id'])); ?>
					<div class="block block-themed block-transparent mb-0">
						<div class="block-header bg-primary-dark">
							<h3 class="block-title">Delete Skill</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-fw fa-times"></i>
								</button>
							</div>
						</div>
						<div class="block-content font-size-sm">
							<p>Are you sure you want to remove this record?</p>
						</div>
						<div class="block-content block-content-full text-right border-top">
							<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-sm btn-danger" name="delete"><i class="fa fa-check mr-1"></i>Delete</button>
						</div>
						<?php echo form_close(); ?>
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
