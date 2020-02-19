<?php
class Employee_model extends CI_Model
{
    function check_if_exist($fname,$lname) {
        $this->db->where('lname',$lname);
        $this->db->where('fname',$fname);
        $query = $this->db->get('employees');
        return $query->num_rows();
    }
    
    function push_employee($data) {
        $this->db->insert('employees',$data);
    }
}