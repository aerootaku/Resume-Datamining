<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/27/2018
 * Time: 1:23 PM
 */

class job_offer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('job_model');
		$this->load->model('skills_model');

	}

	public function index(){
		$data = array(
			"skills"=>$this->skills_model->get_skill(),
			"jobs"=>$this->job_model->get_jobs()
		);
		$this->load->view('admin/job_offer', $data);

	}

	public function create(){
		if(isset($_POST['create'])){

			$s = "";

			foreach ($_POST['skills'] as $skill){
				$s .= $skill . ", ";
			}

			 $sk = substr($s, 0, -1);

			$data = array(
				"job_rno"=>date('ymdhis'),
				"job_name"=>$_POST['job_name'],
				"job_description"=>$_POST['job_description'],
				"skills"=> $sk,
				"nlp_skills"=>$sk,
				"location"=>$_POST['location'],
				"company_name"=>$_POST['company_name'],
				"nlp_experience"=>$_POST['experience'],
				"year_experience"=>$_POST['experience'],
				"created_at"=>date('Y-m-d h:i:s')
			);

			$insert = $this->job_model->new_job($data);

			if($insert){
				$this->session->set_flashdata('msg', 'New Job Created Successfully!');
				redirect('admin/job_offer', 'refresh');
			}
			else{
				$this->session->set_flashdata('msg', 'There was an error');
				redirect('admin/job_offer', 'refresh');
			}
		}
	}

	public function update($id){
		//TODO: UPDATE
	}

	public function remove($id){
		$delete = $this->job_model->remove($id);

		if($delete){
			$this->session->set_flashdata('delete', 'Job Deleted Successfully');
			redirect('admin/job_offer', 'refresh');
		}
		else{
			$this->session->set_flashdata('msg', 'There was an error');
			redirect('admin/job_offer', 'refresh');
		}

	}

}
