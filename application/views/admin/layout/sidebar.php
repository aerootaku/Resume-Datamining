<div class="content-side content-side-full">
	<ul class="nav-main">
		<li class="nav-main-item">
			<a class="nav-main-link <?php if($this->uri->uri_string() == 'admin/dashboard') { echo 'active'; } ?>" href="<?= base_url('admin/dashboard'); ?>">
				<i class="nav-main-link-icon si si-speedometer"></i>
				<span class="nav-main-link-name">Dashboard</span>
			</a>
		</li>
		<li class="nav-main-item">
			<a class="nav-main-link <?php if($this->uri->uri_string() == 'admin/job_offer') { echo 'active'; } ?>" href="<?= base_url('admin/job_offer'); ?>">
				<i class="nav-main-link-icon si si-briefcase"></i>
				<span class="nav-main-link-name">Job Offers</span>
			</a>
		</li>
		<li class="nav-main-item">
			<a class="nav-main-link <?php if($this->uri->uri_string() == 'admin/applicants') { echo 'active'; } ?>" href="<?= base_url('admin/applicants'); ?>">
				<i class="nav-main-link-icon si si-users"></i>
				<span class="nav-main-link-name">Applicants</span>
			</a>
		</li>
		<li class="nav-main-item">
			<a class="nav-main-link <?php if($this->uri->uri_string() == 'admin/resume_ranking') { echo 'active'; } ?>" href="<?= base_url('admin/resume_ranking'); ?>">
				<i class="nav-main-link-icon si si-docs"></i>
				<span class="nav-main-link-name">Resume Ranking</span>
			</a>
		</li>
		<li class="nav-main-item">
			<a class="nav-main-link <?php if($this->uri->uri_string() == 'admin/skills') { echo 'active'; } ?>" href="<?= base_url('admin/skills'); ?>">
				<i class="nav-main-link-icon si si-anchor"></i>
				<span class="nav-main-link-name">Skills</span>
			</a>
		</li>
	</ul>
</div>
