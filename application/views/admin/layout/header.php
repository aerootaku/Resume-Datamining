<div class="d-flex align-items-center">
	<!-- User Dropdown -->
	<div class="dropdown d-inline-block ml-2">
		<button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img class="rounded" src="<?= base_url('public/assets'); ?>/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
			<span class="d-none d-sm-inline-block ml-1"><?php echo $this->session->userdata('username');  ?></span>
			<i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
		</button>
		<div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
			<div class="p-3 text-center bg-primary">
				<img class="img-avatar img-avatar48 img-avatar-thumb" src="<?= base_url('public/assets'); ?>/media/avatars/avatar10.jpg" alt="">
			</div>
			<div class="p-2">
<!--				<h5 class="dropdown-header text-uppercase">User Options</h5>-->
<!--				<a class="dropdown-item d-flex align-items-center justify-content-between" href="--><?//= base_url('admin/profile/change_password'); ?><!--">-->
<!--					<span>Change Password</span>-->
<!--				</a>-->
<!--				<div role="separator" class="dropdown-divider"></div>-->
				<h5 class="dropdown-header text-uppercase">Actions</h5>
				<a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= base_url('admin/profile/logout'); ?>">
					<span>Log Out</span>
					<i class="si si-logout ml-1"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- END User Dropdown -->
</div>
