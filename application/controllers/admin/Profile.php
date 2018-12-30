<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/27/2018
 * Time: 1:02 PM
 */

class profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('job_portal'), 'refresh');
	}

}
