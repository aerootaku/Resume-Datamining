<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/27/2018
 * Time: 3:14 PM
 */

class skills_model extends CI_Model
{

	public  function get_skill(){
		$query = $this->db->get('tbl_skills');
		return $query->result_array();
	}

	public function save($data){
		$this->db->insert('tbl_skills', $data);
		return true;
	}

	public function update($data, $id){
		$this->db->where('id', $id);
		$this->db->update('tbl_skills', $data);
		return true;
	}

	public function remove($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_skills');

		return true;
	}

}
