<?php
/**
 * Created by PhpStorm.
 * User: Kio
 * Date: 5/30/2018
 * Time: 8:40 AM
 */

class crud_model extends CI_Model
{
    public function add($table, $data){
        $this->db->insert($table, $data);
        return true;
    }

    public function get_all($table){
        $query = $this->db->get($table);
        return $result = $query->result_array();
    }

    public function get_by_id($table, $id){
        $query = $this->db->get_where($table, array('id' => $id));
        return $result = $query->row_array();
    }

    public function edit($table, $data, $id){
        $this->db->where('id', $id);
        $this->db->update($table, $data);
        return true;
    }

    public function delete($table, $id){
        $this->db->where('id', $id);
        $this->db->delete($table);

        return true;
    }


}