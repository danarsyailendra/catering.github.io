<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catering_model extends CI_Model {
    public function login($data){
        $this->db->select('email,nama,role_id');
        $query = $this->db->get_where('p_user',$data);
        return $query;
    }
}