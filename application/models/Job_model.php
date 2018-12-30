<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/27/2018
 * Time: 1:24 PM
 */

class job_model extends CI_Model
{

	public function new_job($data){
		$this->db->insert('tbl_job_offer', $data);
		return true;
	}

	public function get_job_specific($id){
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_job_offer');
		return $query->row_array();
	}

	public function get_jobs(){
		$query = $this->db->get('tbl_job_offer');
		return $query->result_array();
	}

	public function get_jobs_open(){
		$this->db->where('status', "Open");
		$query = $this->db->get('tbl_job_offer');
		return $query->result_array();
	}

	public function get_limit($limit){
		$this->db->limit($limit);
		$query = $this->db->get('tbl_job_offer');
		return $query->result_array();
	}

	public function remove($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_job_offer');

		return true;
	}

	public function count_all(){
		$query = $this->db->from("tbl_job_offer")->count_all_results();
		return $query;
	}

}
