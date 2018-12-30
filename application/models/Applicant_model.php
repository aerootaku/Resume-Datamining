<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/27/2018
 * Time: 5:50 PM
 */

class applicant_model extends CI_Model
{

	public function get_all(){
		$query = $this->db->get('tbl_applicants');
		return $query->result_array();
	}

	public function get_applicant_specific($job_name){
		$this->db->where('job_applied', $job_name);
		$query = $this->db->get('tbl_applicants');
		return $query->result_array();
	}

	public function get_limit($limit){
		$this->db->limit($limit);
		$query = $this->db->get('tbl_applicants');
		return $query->result_array();
	}

	public function remove($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_applicants');

		return true;
	}

	public function count_all(){
		$query = $this->db->from("tbl_applicants")->count_all_results();
		return $query;
	}

	public function count_specific_applicant($job_applied){
		$this->db->where('job_applied', $job_applied);
		$query = $this->db->from('tbl_applicants')->count_all_results();
		return $query;
	}

	public function apply($data){
		$this->db->insert('tbl_applicants', $data);
		return true;
	}

	public function save_nlp($data){
		$this->db->insert('tbl_resume_nlp', $data);
		return true;
	}
}
