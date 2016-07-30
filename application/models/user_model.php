<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
    
    public function get_data($num,$offset) {
//        $this->db->where('id',1);
        
      $query =$this-> db-> get('user',$num, $offset);
        return $query->result_array();
    }
    public function add_user($data) 
    {
        $this->db->insert('user',$data);
    }
    
    public function update($data)
    {
        $this->db->where('id','5');
        $this->db->update('user',$data);
    }
    
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');
    }
}
