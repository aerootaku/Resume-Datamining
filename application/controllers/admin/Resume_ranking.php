<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/28/2018
 * Time: 10:12 PM
 */

class resume_ranking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('job_model');
		$this->load->model('applicant_model');
		$this->load->model('nlp_model');
	}

	public function index(){

		$data = array(
			"jobs"=>$this->job_model->get_jobs()
		);
		$this->load->view('admin/resume_ranking', $data);
	}

	public function detailed_view($id){

		$fetch = $this->job_model->get_job_specific($id);

		$data = array(
			"job"=>$fetch,
			"applicant_model"=>$this->applicant_model,
			"nlp_model"=>$this->nlp_model
			);

		$this->load->view('admin/detailed_view', $data);

	}

	public function close_job($email){
		// from address
		$this->email->from('no-reply@aviarthardph.net', 'Resume Identifier using Data Mining');
		$this->email->to($email); // to Email address

		$this->email->subject('Interview Invitation'); // email Subject
		$this->email->message('Good Day! Thank you for your application. You are invited for a one on one interview with us, kindly wait for our call for a further instruction.. Thank you!'); // email Body or Message
		$this->email->send(); // send Email
	}

}
