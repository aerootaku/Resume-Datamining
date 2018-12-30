<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/29/2018
 * Time: 4:10 PM
 */

class nlp_model extends CI_Model
{

	public function get_applicant($applicant_id){
		$this->db->where('applicant_id', $applicant_id);
		$query = $this->db->get('tbl_resume_nlp');
		return $query->row_array();
	}

	public function save_ranking($data){
		$this->db->insert('tbl_ranking', $data);
		return true;
	}

	public function show_rank($job_name){
		$this->db->select('*');
		$this->db->from('tbl_applicants');
		$this->db->join('tbl_ranking', 'tbl_applicants.applicant_id = tbl_ranking.applicant_id');
		$this->db->where(array("tbl_applicants.job_applied"=>$job_name));
		$this->db->order_by('tbl_ranking.rank', 'asc');

		$query = $this->db->get();

		return $query->result_array();
	}
}
