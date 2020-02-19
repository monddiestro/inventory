<?php 
class Mouse_model extends CI_Model
{
    function check_if_exist($tag) {
        $this->db->where('tag',$tag);
        $query = $this->db->get('mouse');
        return $query->num_rows();
    }

    function push_mouse($data) {
        $this->db->insert('mouse',$data);
    }

    function pull_mouse($status) {
        empty($status) ? '' : $this->db->where('status',$status);
        $query = $this->db->get('mouse');
        return $query;
    }
}
