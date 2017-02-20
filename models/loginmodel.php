<?php
  class Loginmodel extends CI_Model{
    public function checkSpecificQuery($username,$password){
      $this->db->select("*");
      $this->db->from("tbl_user");
      $this->db->where("Username",$username);
      $this->db->where("Password",$password);
      $this->db->limit(1);
      $query=$this->db->get();
      if($query->num_rows()>0){
        $result=$query->result_array();
        return $result[0];
      }
      else{
        return false;
      }

  }
}

 ?>
