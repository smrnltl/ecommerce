<?php
class Usermodel extends CI_Model{
  public function getAllUser(){
    $this->db->select("*");
    $this->db->from("tbl_user");
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function getRequiredUser($id){
    $this->db->select("*");
    $this->db->from("tbl_user");
    $this->db->where("ID",$id);
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
  public function addUser($data){
    if($this->db->insert("tbl_user",$data)){
      return true;
    }
    else{
      return false;
    }
  }
  public function editUser($data,$id){
    $this->db->where("ID",$id);
    if($this->db->update("tbl_user",$data)){
      return true;
    }
    else {
      return false;
    }
  }
  public function deleteUser($id){
    $this->db->where("ID",$id);
    if($this->db->delete("tbl_user")){
      return true;
    }
    else{
      return false;
    }
  }
}
 ?>
