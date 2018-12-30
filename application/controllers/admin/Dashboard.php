<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/27/2018
 * Time: 12:42 AM
 */

class dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('skills_model');
		$this->load->model('job_model');
		$this->load->model('applicant_model');
	}

	public function index(){
		$data = array(
			"skills"=>$this->skills_model->get_skill(),
			"job_model"=>$this->job_model,
			"applicant_model"=>$this->applicant_model
		);
		$this->load->view('admin/dashboard', $data);
	}



}
