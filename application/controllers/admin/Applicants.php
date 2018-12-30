<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/27/2018
 * Time: 5:52 PM
 */

class applicants extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicant_model');
	}

	public function index(){
		$data = array("applicants"=>$this->applicant_model->get_all());

		$this->load->view('admin/applicant', $data);
	}

	public function remove($id){
		$delete = $this->applicant_model->remove($id);

		if($delete){
			$this->session->set_flashdata('delete', 'Applicant Deleted Successfully');
			redirect('admin/applicants', 'refresh');
		}
		else{
			$this->session->set_flashdata('msg', 'There was an error');
			redirect('admin/applicants', 'refresh');
		}
	}

}
