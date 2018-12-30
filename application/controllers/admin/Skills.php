<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/30/2018
 * Time: 9:49 AM
 */

class skills extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('skills_model');
	}

	public function index(){
		$fetch = array(
			"skills"=>$this->skills_model->get_skill()
		);

		$this->load->view('admin/skill', $fetch);
	}

	public function create(){
		$data = array(
			"skill"=>$_POST['skill_name'],
			"created_at"=>date('Y-m-d h:i:s')
		);
		$insert = $this->skills_model->save($data);
		if(isset($_POST['create'])){
			if($insert){
				$this->session->set_flashdata('msg', 'Skills Added Successfully');
				redirect('admin/skills', 'refresh');
			}
			else{
				$this->session->set_flashdata('msg', 'There was an error');
				redirect('admin/skills', 'refresh');
			}
		}
		else{
			$this->load->view('admin/skills');
		}

	}

	public function update($id){
		$data = array("skill"=>$_POST['skill_name']);
		$update = $this->skills_model->update($data, $id);
		if(isset($_POST['update'])){
			if($update){
				$this->session->set_flashdata('update', 'Skills Updated Successfully');
				redirect('admin/skills', 'refresh');
			}
			else{
				$this->session->set_flashdata('msg', 'There was an error');
				redirect('admin/skills', 'refresh');
			}
		}
		else{
			$this->load->view('admin/skills');
		}

	}

	public function remove($id){
		$delete = $this->skills_model->remove($id);

		if($delete){
			$this->session->set_flashdata('delete', 'Skills Deleted Successfully');
			redirect('admin/skills', 'refresh');
		}
		else{
			$this->session->set_flashdata('msg', 'There was an error');
			redirect('admin/skills', 'refresh');
		}
	}

}
