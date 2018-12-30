<?php
/**
 * Created by PhpStorm.
 * User: Kio
 * Date: 5/30/2018
 * Time: 8:42 AM
 */

class auth extends CI_Model
{

    public function login($table, $data){
        $query = $this->db->get_where($table, array('username' => $data['username']));
        if ($query->num_rows() == 0){
            return false;
        }
        else{
            //Compare the password attempt with the password we have stored.
            $result = $query->row_array();
            $validPassword = password_verify($data['password'], $result['password']);
            if($validPassword){
                return $result = $query->row_array();
            }

        }
    }

    public function change_pwd($table, $data, $id){
        $this->db->where('id', $id);
        $this->db->update($table, $data);
        return true;
    }

    public function change_name($table, $data, $id){
        $this->db->where('id', $id);
        $this->db->update($table, $data);
        return true;
    }

}