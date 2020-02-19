<?php
class Computer_model extends CI_Model
{
    function push_computer($data) {
        $this->db->insert('computers',$data);
    }

    function pull_tag_exist($tag) {
        $this->db->where('tag', $tag);
        $query =  $this->db->get('computers');
        return $query->num_rows();
    }

    function pull_computers($status) {
        empty($status) ? '' : $this->db->where('status',$status);
        $query = $this->db->get('computers'); 
        return $query;
    }

}